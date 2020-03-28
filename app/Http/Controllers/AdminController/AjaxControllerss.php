<?php

namespace app\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Data;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class AjaxControllerss extends Controller
{
    public function addItem(Request $request)
    {
        $rules = array(
                'name' => 'required|alpha_num',
                'description' => 'required|alpha_num',
                'designation' => 'required|alpha_num',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Response::json(array(
                    'errors' => $validator->getMessageBag()->toArray(),
            ));
        } else {
            $data = new Data();
            $data->name = $request->name;
            $data->description = $request->description;
            $data->designation = $request->designation;
            $data->save();
            return response()->json($data);
        }
    }

    public function mainView(Request $req)
    {
        $data = Data::all();
        return view('admin.ajaxCrude.ajaxCrudeListing')->withData($data);
    }

    public function editItem(Request $req)
    {
        $data = Data::find($req->id);
        //var_dump($data); exit;
        $data->name = $req->name;
        $data->description = $req->description;
        $data->designation = $req->designation;
        $data->save();
        
        return response()->json($data);
    }

    public function deleteItem(Request $req)
    {
        Data::find($req->id)->delete();
        return response()->json();
    }
}
