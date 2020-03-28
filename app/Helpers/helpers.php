<?php
use App\Category;
use App\Country;

function getCategory(){
    $categories = Category::pluck('name','id');
    return $categories;
}

function getCountry(){
    $ountries = Country::pluck('name','id');
    return $ountries;
}


function get_catname($cat_id) {   
    $categoriesname = DB::table('categories')->where('id', $cat_id)->first();
    return (isset($categoriesname->name) ? $categoriesname->name : '');
}

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Setting\Setting();
        }

        if (is_array($key)) {
            return \App\Setting\Setting::set($key[0], $key[1]);
        }

        $value = \App\Setting\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

?>