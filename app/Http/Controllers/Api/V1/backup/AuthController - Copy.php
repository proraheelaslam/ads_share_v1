<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Storage;
use Avatar;
use App\Notifications\SignupActivate;
use App\Notifications\SignupActivated;
use App\User;
//use Validator;
//use Lang;
class AuthController extends Controller
{
    /**
     * Create user deactivate and send notification to activate account user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'activation_token' => str_random(60)
        ]);

        $user->save();

        $avatar = Avatar::create($user->name)->getImageObject()->encode('png');
        Storage::put('avatars/'.$user->id.'/avatar.png', (string) $avatar);

        $user->notify(new SignupActivate($user));

        return response()->json([
            'message' => __('auth.signup_success')
        ], 201);
    }

    /**
     * Confirm your account user (Activate)
     *
     * @param  [type] $token
     * @return [string] message
     * @return [obj] user
     */
    public function signupActivate($token)
    {
        $user = User::where('activation_token', $token)->first();

        if (!$user) {
            return response()->json([
                'message' => __('auth.token_invalid')
            ], 404);
        }

        $user->active = true;
        $user->activation_token = '';
        $user->save();

        $user->notify(new SignupActivated($user));

        return $user;
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        //dd($request->all());
        $validator = Validator($request->all(),[
                'email'   => 'required|exists:users,email',
                'password'  => 'required',
        ]);
        if($validator->fails()){
            ApiResponse::errorResponse('VALIDATION_ERROR', $message, []);
            //return $this->validateResponse($validator->errors()->first(),[]);
        
        }
        $credentials = request(['email', 'password']);
        if(Auth::attempt($credentials)) {

            $user = Auth::user();
            
            $tokenResult = $user->createToken('Personal Access Token')->accessToken;
            $user->token =  $tokenResult;   
            $msg = 'Login success';
            return ApiResponse::successResponse('SUCCESS', $messageArr['message'], $user);
            //return $this->successResponse($msg,$user);
        
            
        }else {
            $msg = 'User not found';
            return $this->errorResponse($msg,[]);
        }
       
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => __('auth.logout_success')
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        //dd($request);
        return response()->json($request->user());
    }

    public function userValidate($request)
    {

        $validateResponse = [];
        $validateResponse['status'] = false;
        $validateResponse['message'] = '';
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            $message = $validator->errors()->first();
            $validateResponse['status'] = true;
            $validateResponse['message'] = $message;

        }

        return $validateResponse;
    }


    /*** API RESPONSES  */
    
    /**
     * Success Response
     */
    // public function successResponse($message,$data){
    //     return [
    //            'status'=> true,
    //            'code'=> 200,
    //            'message'=> $message,
    //            'data'=> $data 
    //     ];
    // }
    // /**
    //  * Error Response
    //  */
    // public function errorResponse($message,$data){
    //     return [
    //         'status'=> false,
    //         'code'=> 201,
    //         'message'=> $message,
    //         'data'=> $data 
    //  ];
    // }
    // /**
    //  * Validate Response
    //  */
    // public function validateResponse($message,$data){
    //     return [
    //         'status'=> false,
    //         'code'=> 401,
    //         'message'=> $message,
    //         'data'=> $data 
    //  ];
    
    // }
}
