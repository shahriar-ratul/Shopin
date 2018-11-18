<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Auth;
use redirect;

use Illuminate\Http\Request;

class ManageCategoryController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //$product_model=new Product();
        $data['my_categories'] =\App\Category::get();
       // $data['my_products'] =$product_model::where('created_by',Auth::user()->id)->paginate(3);
        //$data['my_products']=$product_model::with('catname')->paginate(9);
    
        return view('manage_category.create_categories',['data'=>$data]);
    }


    public function showCategory()
    {
    	
        $data['my_categories'] =\App\Category::paginate(50);
        //$data['my_categories'] =$category_model::where('created_by',Auth::user()->id)->paginate(30);
        //$data['my_products']=$product_model::with('catname')->paginate(4);
    
        return view('manage_category.all_categories',['data'=>$data]);
    }
    public function store(Request $request)
    {
        $product_model=new Category();
        if($request->category_row_id)
        {
            // update the product.
             $product_model = $product_model::find($request->category_row_id);
        }
        $product_model->category_name=$request->category_name;
        $product_model->category_short_description=$request->category_short_description;
        $product_model->parent_id=$request->parent_id;
        $product_model->category_long_description=$request->category_long_description;
        $product_model->has_child=$request->has_child;
        $product_model->is_featured=$request->is_featured;


        $file = $request->file('category_image');
        if($file!=null){
            $fileName = time().$file->getClientOriginalName();
            $request->file('category_image')->move('public/category_images/' , $fileName);
            $product_model->category_image=$fileName;
        }
        $product_model->created_at=time();
        $product_model->updated_at=time();
        $product_model->save();


        return redirect('/admin/category/create');
    }
    public function destroy($id)
    {
      $data=\App\Category::where('category_row_id',$id)->first();

      $data->delete();
        return redirect('/admin/category/show');
    }

    public function edit($id)
    {
       $data['my_categories']=  \App\category::where('category_row_id',$id)->get();

       return view('manage_category.edit_categories',['data'=>$data]);

    }

}
