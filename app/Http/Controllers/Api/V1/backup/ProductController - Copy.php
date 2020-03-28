<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Facades\ApiResponse;
use File;
use Image;
use Illuminate\Support\Facades\File as LaraFile;
use Redirect,Response,DB,Config;
use App\Product;
use App\ProductsImage;
//use App\User;

class ProductController extends Controller
{
   
    public function viewProducts()
    {
        $products = Product::with('category')->get();
        
        $allProducts = $products->map(function($q){

            $dataArr['product_name']   = $q->name;
            //$dataArr['allproduct']    = $q;
            $dataArr['category_name']  = $q->category->name;
            $dataArr['price']          = $q->price;
            return $dataArr;
        });
                      
        $msg = __('Products retrieved successfully.');
        return ApiResponse::successResponse('SUCCESS', $msg, $allProducts);
    
    }

   
    public function addProduct(Request $request){
       //print_r($request->all());exit;
        $validator = Validator($request->all(),[
              'name'       => 'required',
              'cat_id'     => 'required',
              'price'      => 'required',
              'quantity'   => 'required',
              'description'=> 'required',
              'image'      => 'required'
        ]);
        
        if($validator->fails()){
             //dd($validator);
            $msg = $validator->errors()->first();
            return ApiResponse::errorResponse('VALIDATION_ERROR', $msg, []);
        }

           $product = new Product([
               'name'        => $request->get('name'),
               'cat_id'      => $request->get('cat_id'),
               'price'       => $request->get('price'),
               'quantity'    => $request->get('quantity'),
               'description' => $request->get('description'),
               'image'       => $request->get('image')
           ]);
           
           // Upload Image
            if($request->hasFile('image')){
               $image_tmp = $request->file('image');
               if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $image_tmp->move(public_path('images/backend_images/product'), $fileName);
                $product->image = $fileName; 
                }
            }

           $product->save();
           $msg = __('Product save successfully');
           return ApiResponse::successResponse('SUCCESS', $msg, $product);
          
  
        $msg = __('Product save successfully');
        return ApiResponse::successResponse('SUCCESS', $msg, $product);

    }


    public function editProduct(Request $request,$id=null){
        
        $product          = Product::find($id);
        $current_image    = $product->image;
        $catid_notexist   = $product->cat_id <> $request->cat_id;

        if(is_null($product)) {
            $msg = 'Product not found';
            return ApiResponse::errorResponse('BAD_REQUEST', $msg, []);
        }
        
        if($catid_notexist) {
            $msg = 'Category not found';
            return ApiResponse::errorResponse('BAD_REQUEST', $msg, []);
        }

        //$image    = $request->file('image');
        $validator = Validator($request->all(),[
                'name'       => 'required',
                'cat_id'     => 'required',
                'price'      => 'required',
                'quantity'   => 'required',
                'description'=> 'required',
                'image'      => 'required'
          ]);
          if($validator->fails()){
              $msg = $validator->errors()->first();
              return ApiResponse::errorResponse('VALIDATION_ERROR', $msg, []);
          }

            $data = $request->all();

           // Upload Image
            if($request->hasFile('image')){
               $image_tmp = $request->file('image');
               if ($image_tmp->isValid()) {
                  // Upload Images after Resize
                  $extension = $image_tmp->getClientOriginalExtension();
                  $fileName = rand(111,99999).'.'.$extension;
                  $image_tmp->move(public_path('images/backend_images/product'), $fileName);
                }
            }else if(!empty($current_image)){
                $fileName = $current_image;
            }else{
                $fileName = '';
            }

            $product = Product::where(['id'=>$id])->update(['name'=>$data['name'],'cat_id'=>$data['cat_id'],'price'=>$data['price'],'quantity'=>$data['quantity'],'description'=>$data['description'],'image'=>$fileName]);
            
            //delete image file from upload folder which is send from edit view throught hidden field with the name current_image.
            $file       = $current_image;

            $filename   = public_path('images/backend_images/product').'/'.$file;
            File::delete($filename);

            $msg = __('Product has been updated successfully');
            return ApiResponse::successResponse('SUCCESS', $msg, $product);

            //return redirect('admin/view-product')->with('flash_message_success', 'Product has been updated successfully');
       
        
        $productDetails = Product::where(['id'=>$id])->first();
        $msg = __('Product has been updated successfully');
            return ApiResponse::successResponse('SUCCESS', $msg, $product);
        //$productstitle = 'Edit Products';
        //return view('admin.products.edit')->with(compact('productDetails', 'productstitle'));
    }


    public function deleteProduct($id = null){

        $checkProduct = Product::find($id);
        
         if(is_null($checkProduct)) {
             $msg = 'Product not found';
             return ApiResponse::errorResponse('BAD_REQUEST', $msg, []);
         }
        // //delete product larg images related to product id:
        // $productimages = DB::table('products_images')->whereIn('pro_id', array($id))->get();
        // foreach($productimages as $productimage){
        //     $file       = $productimage->image;
        //     $filename   = public_path('images/backend_images/product').'/large/'.$file;
        //     File::delete($filename);
        // }
        // //delete product medium images related to product id:
        // foreach($productimages as $productimage){
        //     $file       = $productimage->image;
        //     $filename   = public_path('images/backend_images/product').'/medium/'.$file;
        //     File::delete($filename);
        // }
        // //delete product small images related to product id:
        // foreach($productimages as $productimage){
        //     $file       = $productimage->image;
        //     $filename   = public_path('images/backend_images/product').'/small/'.$file;
        //     File::delete($filename);
        // }
        // //delete product main images related to product id:
        // $image      = DB::table('products')->where('id', $id)->first();
        // $file       = $image->image;
        // $filename   = public_path('images/backend_images/product').'/'.$file;
    
        // File::delete($filename);

        //delete product:
        Product::find($id)->delete();
        $msg = __('Product has been deleted successfully');
        return ApiResponse::successResponse('SUCCESS', $msg, []);
		
    }

    public function deleteProductAltImage($id=null){

        $checkProduct = ProductsImage::find($id);
        if(is_null($checkProduct)) {
            $msg = 'Image not found';
            return ApiResponse::errorResponse('BAD_REQUEST', $msg, []);
        }

        ProductsImage::find($id)->delete();
        $msg = __('Product multiple image deleted successfully');
        return ApiResponse::successResponse('SUCCESS', $msg, []);
    }


    public function categoryProductList($id = null){
        $product = Product::find($id);
        if(is_null($product)) {
            $msg = 'Product not found';
            return ApiResponse::errorResponse('BAD_REQUEST', $msg, []);
        }
        $cat_id  = $product->cat_id;
        $productrelatedtocatid = DB::table('products')->where('cat_id', $cat_id)->get();
        $msg = __('Category '.$cat_id.' id related product list successfully');
        return ApiResponse::successResponse('SUCCESS', $msg, $productrelatedtocatid);

    }



}
