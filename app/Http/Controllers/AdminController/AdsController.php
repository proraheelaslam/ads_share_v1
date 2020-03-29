<?php

namespace App\Http\Controllers\AdminController;

use App\Ads;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

class AdsController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('admin.ads.view_ads');
    }

    public function getAjaxAds(){

        $data = Ads::get();
        return DataTables::of($data)
            ->addColumn('action', function($row){
                $btn = '<a href="'.url("admin/ads").'/'.$row->id.'/edit'.'" class="edit btn btn-primary btn-sm">Edit</a>&nbsp<button id="deleteRecord" class="edit btn btn-danger btn-sm btn-delete" data-url="'.url("admin/categories").'/'.$row->id.'">Delete</button>';

                return $btn;
            })
            ->escapeColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.ads.add_ads');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate($request, [
                'name'        => 'required',
                'description'       => 'required',
                'duration'  => 'required',
            ]);
            //dd($request->country_id);
            $ads = new Ads([
                'name'        => $request->get('name'),
                'date'        => $request->get('description'),


            ]);
            //dd($category);
            $ads->save();
            return redirect('admin/ads')->with('flash_message_success', 'Ads has been added successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){


        $ads     = Ads::where(['id'=>$id])->first();


        $categoriestitle     =  trans('app.EditCategories');
        return view('admin.categories.edit_ads');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //if($request->isMethod('post')){
        //dd($request->all());
        $request->validate([
            'name'        => 'required',
            'description'  => 'required',

        ]);

        $data = $request->all();
        //dd($data);
        Ads::where(['id'=>$id])->
        update(
            [
                'name'        => $data['name'],
                'description'        => $data['description'],

            ]
        );

        return redirect('admin/ads')->with('flash_message_success', 'Ads has been updated successfully');
        //}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ads::find($id)->delete();
        $msg = __('Ads has been deleted successfully');
        return ApiResponse::successResponse('SUCCESS', $msg, []);
        //return redirect()->back()->with('flash_message_success', 'Category has been deleted successfully');
    }

    public function switchLang($lang)
    {
        App::setLocale(session()->get('locale'));
        session()->put('locale', $lang);
        $response = ['status' => 'success', 'code' => '200', 'message' => 'Language was switched.', 'metod' => 'GET'];
        return $response;
    }
}
