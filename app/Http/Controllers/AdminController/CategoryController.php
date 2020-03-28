<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;
use Illuminate\Support\Facades\File as LaraFile;
use App\Category;
use App\Product;
use DB;

class CategoryController extends Controller
{
    public function viewCategories(){ 
        $categories = category::get();
        //return $categories = Category::with('prodects.images')->paginate(10);

        //return  Product::with(['category' => function ($query) {
            //$query->where('name', 'like', '%z%');
        //}])->get();

        return view('admin.categories.view_categories')->with(compact('categories'));
    
    }

    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $this->validate($request, [
              'name'        => 'required',
              'description' => 'required'
             ]);
            
           $category = new Category([
               'name'        => $request->get('name'),
               'description' => $request->get('description')
           ]);
           $category->save();
           return redirect('admin/view-categories')->with('flash_message_success', 'Category has been added successfully!'); 
       } 
       $categoriestitle = 'Add Categories';    
       return view('admin.categories.add_category')->with(compact('categoriestitle')); 
    }

    public function editCategory(Request $request,$id=null){
        
        if($request->isMethod('post')){
            
            $this->validate($request, [
                'name'        => 'required',
                'description' => 'required'
               ]);
            $data = $request->all();
           
            Category::where(['id'=>$id])->update(['name'=>$data['name'],'description'=>$data['description']]);

            return redirect('admin/view-categories')->with('flash_message_success', 'Category has been updated successfully');
        }
        
        $categoryDetails = Category::where(['id'=>$id])->first();
        $categoriestitle = 'Edit Categories';
        return view('admin.categories.edit_category')->with(compact('categoryDetails', 'categoriestitle'));
    }

    public function deleteCategory($id = null){

        //delete product main images related to category id:
        // $productimages = DB::table('products')->whereIn('cat_id', array($id))->get();
        // foreach($productimages as $productimage){
        //     $file       = $productimage->image;
        //     $pro_id     = $productimage->id;
        //     $filename   = public_path('images/backend_images/product').'/'.$file;
        //     LaraFile::delete($filename);
        // }

        //  //delete product larg images related to product id:
        //  $proimages = DB::table('products_images')->whereIn('pro_id', array($pro_id))->get();
        //  foreach($proimages as $proimage){
        //      $file       = $proimage->image;
        //      $filename   = public_path('images/backend_images/product').'/large/'.$file;
        //      LaraFile::delete($filename);
        //  }
        //  //delete product medium images related to product id:
        //  foreach($proimages as $proimage){
        //      $file       = $proimage->image;
        //      $filename   = public_path('images/backend_images/product').'/medium/'.$file;
        //      LaraFile::delete($filename);
        //  }
        //  //delete product small images related to product id:
        //  foreach($proimages as $proimage){
        //      $file       = $proimage->image;
        //      $filename   = public_path('images/backend_images/product').'/small/'.$file;
        //      LaraFile::delete($filename);
        //  }

        //delete category:
        //Category::where(['id'=>$id])->delete();
        Category::find($id)->delete();
        return redirect()->back()->with('flash_message_success', 'Category has been deleted successfully');
    }


}
