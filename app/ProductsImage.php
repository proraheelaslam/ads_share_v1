<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
class ProductsImage extends Model
{
    protected $fillable = [
        'id',
        'pro_id',
        'image'
    ]; 

    public function product(){
        return $this->belongsTo('App\Product','pro_id');
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        static::deleting(function($image) { // before delete() method call this
                File::delete(public_path('images/backend_images/product').'/large/'.$image->image);
                File::delete(public_path('images/backend_images/product').'/medium/'.$image->image);
                File::delete(public_path('images/backend_images/product').'/small/'.$image->image);
            // do the rest of the cleanup...
        });
    }


}
