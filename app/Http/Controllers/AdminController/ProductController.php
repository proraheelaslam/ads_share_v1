<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\File;
use Image;
use Illuminate\Support\Facades\File as LaraFile;
use Redirect,Response,DB,Config;
use Mail;
use App\Category;
use App\Product;
use App\ProductsImage;

class ProductController extends Controller
{
    public function viewProducts(){ 
        $products = Product::with(['category'])->get();
        //dd($products);
        return view('admin.products.list')->with(compact('products'));
        
        //$products = Product::orderBy('id', 'ASC')->paginate(1);
        //return view('admin.products.view_products', compact('products'));
    }

    public function addProduct(Request $request){
        $image    = $request->file('image');
        if($request->isMethod('post')){
            $this->validate($request, [
              'name'       => 'required',
              'cat_id'     => 'required',
              'price'      => 'required',
              'quantity'   => 'required',
              'description'=> 'required',
              'image'      => 'required'
             ]);
            
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
               $image_tmp = Input::file('image');
               if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $image->move(public_path('images/backend_images/product'), $fileName);
                $product->image = $fileName; 
                }
            }

           $product->save();
           return redirect('admin/view-product')->with('flash_message_success', 'Product has been added successfully!'); 
       } 
       $productstitle = 'Add Products';
        return view('admin.products.add')->with(compact('productstitle'));
    }

    public function addImages(Request $request, $id=null){
        
        $productDetails = Product::where(['id' => $id])->first();
        
        $categoryDetails = Category::where(['id'=>$productDetails->cat_id])->first();
        $category_name = $categoryDetails->name;
        
        if($request->isMethod('post')){
           
            $this->validate($request, [
                'image'      => 'required'
               ]);
              
             $product = new ProductsImage([
                 'image'       => $request->get('image')
             ]);

            $data = $request->all();
            
            

            if ($request->hasFile('image')) {
                $files = $request->file('image');
                 
                foreach($files as $file){
                    // Upload Images after Resize
                    $image = new ProductsImage;
                    $extension = $file->getClientOriginalExtension();
                    $fileName = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/product/large'.'/'.$fileName;
                    $medium_image_path = 'images/backend_images/product/medium'.'/'.$fileName;  
                    $small_image_path = 'images/backend_images/product/small'.'/'.$fileName;  
                    Image::make($file)->save($large_image_path);
                    Image::make($file)->resize(600, 600)->save($medium_image_path);
                    Image::make($file)->resize(300, 300)->save($small_image_path);
                    $image->image = $fileName;  
                    $image->pro_id = $data['hidden_proid'];
                    $image->save();
                }   
            }

            return redirect('admin/add_images/'.$id)->with('flash_message_success', 'Product Images has been added successfully');

        }
       
        $productImages = ProductsImage::where(['pro_id' => $id])->orderBy('id','DESC')->get();
        $title = "Add Images";
        return view('admin.products.add_images')->with(compact('title','productDetails','category_name','productImages'));
    }

    public function deleteProductAltImage($id=null){
        ProductsImage::find($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Product alternate mage has been deleted successfully');
    }

    public function editProduct(Request $request,$id=null){
        $image    = $request->file('image');
        if($request->isMethod('post')){
            
            $this->validate($request, [
                'name'       => 'required',
                'cat_id'     => 'required',
                'price'      => 'required',
                'quantity'   => 'required',
                'description'=> 'required',
                'image'      => 'required'
               ]);
            $data = $request->all();

           // Upload Image
            if($request->hasFile('image')){
               $image_tmp = Input::file('image');
               if ($image_tmp->isValid()) {
                  // Upload Images after Resize
                  $extension = $image_tmp->getClientOriginalExtension();
                  $fileName = rand(111,99999).'.'.$extension;
                  $image->move(public_path('images/backend_images/product'), $fileName);
                }
            }else if(!empty($data['current_image'])){
                $fileName = $data['current_image'];
            }else{
                $fileName = '';
            }

            Product::where(['id'=>$id])->update(['name'=>$data['name'],'cat_id'=>$data['cat_id'],'price'=>$data['price'],'quantity'=>$data['quantity'],'description'=>$data['description'],'image'=>$fileName]);
            
            //delete image file from upload folder which is send from edit view throught hidden field with the name current_image.
            $file       = $data['current_image'];
            $filename   = public_path('images/backend_images/product').'/'.$file;
            LaraFile::delete($filename);

            return redirect('admin/view-product')->with('flash_message_success', 'Product has been updated successfully');
        }
        
        $productDetails = Product::where(['id'=>$id])->first();
        
        $productstitle = 'Edit Products';
        return view('admin.products.edit')->with(compact('productDetails', 'productstitle'));
    }

    public function deleteProduct($id = null){
        //delete product:
        Product::find($id)->delete();
		return redirect()->back()->with('flash_message_success', 'Product has been deleted successfully');
    }

}
