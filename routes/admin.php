<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

// Admin Settings Routes
Route::get('settings', 'AdminController\SettingController@index')->name('settings');
Route::post('settings', 'AdminController\SettingController@store')->name('settings.store');

//Ajax Crud Laravel
Route::get('view_listing', 'AdminController\AjaxControllerss@mainView');
Route::post('addItem', 'AdminController\AjaxControllerss@addItem');
Route::post('editItem', 'AdminController\AjaxControllerss@editItem');
Route::post('deleteItem', 'AdminController\AjaxControllerss@deleteItem');

// Admin Categories Routes
Route::match(['get', 'post'], 'add-category','AdminController\CategoryController@addCategory');

Route::match(['get', 'post'], 'edit-category/{id}','AdminController\CategoryController@editCategory');

Route::match(['get', 'post'], 'delete-category/{id}','AdminController\CategoryController@deleteCategory');

Route::get('view-categories','AdminController\CategoryController@viewCategories');

// Admin Product Routes
Route::match(['get', 'post'], 'add-product','AdminController\ProductController@addProduct');

Route::match(['get', 'post'], 'edit-product/{id}','AdminController\ProductController@editProduct');

Route::match(['get', 'post'], 'delete-product/{id}','AdminController\ProductController@deleteProduct');

Route::get('view-product','AdminController\ProductController@viewProducts');

// Admin Product images Routes
Route::match(['get', 'post'], 'add_images/{id}','AdminController\ProductController@addImages');
Route::get('delete_image/{id}','AdminController\ProductController@deleteProductAltImage');

//Route::get('/dashboard','App\DashboardController@index');

Route::get('categories/get-ajax','AdminController\CatController@getAjaxCategories');

//Route::get('categories/{locale}', 'AdminController\CatController@index');
//Route::get('categories/{locale}/{id}/edit','AdminController\CatController@edit');

Route::resource('categories', 'AdminController\CatController');
Route::get('switchLang/{lang}', 'AdminController\CatController@switchLang')->name('switchLanguage');

Route::group(['middleware' => ['auth']], function() {
    Route::get('users/get-ajax','AdminController\UserController@getAjaxUser');
    Route::resource('users','AdminController\UserController');
    Route::get('roles/get-ajax','AdminController\RoleController@getAjaxRole');
    Route::resource('roles','AdminController\RoleController');  
});
