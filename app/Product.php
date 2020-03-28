<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
class Product extends Model
{
    protected $fillable = [
        'id',
        'cat_id',
        'name',
        'image',
        'price',
        'description',
        'quantity'
    ]; 

    protected $hidden = ['created_at','updated_at'];

    public function category(){
        return $this->belongsTo('App\Category','cat_id');
    }
    public function images(){
        return $this->hasMany('App\ProductsImage','pro_id');
    }
    
    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        
        static::deleting(function($product) { // before delete() method call this
            
            //dd('<br>'.$product.'</br>');
            File::delete(public_path('images/backend_images/product').'/'.$product->image);
        
            foreach($product->images()->get() as $image){
                File::delete(public_path('images/backend_images/product').'/large/'.$image->image);
                File::delete(public_path('images/backend_images/product').'/medium/'.$image->image);
                File::delete(public_path('images/backend_images/product').'/small/'.$image->image);
                $image->delete();
            }
            // do the rest of the cleanup...
        });
    }
}
