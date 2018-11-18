<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function welcome(){

        $data['info'] = \App\Product::get();
        return view('pages.welcome', ['data'=>$data]);
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    
    
    public function allProduct(){
        $data['info'] = \App\Product::paginate(12);
        return view('pages.products', ['data'=>$data]);
    }
     public function productDetails($id)
    {
        $data['info'] = \App\Product::where('product_row_id',$id)->first();
        return view ('pages.productDetails',['data'=>$data]);
    }
    public function M_1()
    {
        
        $data['info']=\App\Product::where('category_row_id','1')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_2()
    {
        
        $data['info']=\App\Product::where('category_row_id','2')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_3()
    {
        
        $data['info']=\App\Product::where('category_row_id','3')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_4()
    {
        
        $data['info']=\App\Product::where('category_row_id','4')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_5()
    {
        
        $data['info']=\App\Product::where('category_row_id','5')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_6()
    {
        
        $data['info']=\App\Product::where('category_row_id','6')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_7()
    {
        
        $data['info']=\App\Product::where('category_row_id','7')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_8()
    {
        
        $data['info']=\App\Product::where('category_row_id','8')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_9()
    {
        
        $data['info']=\App\Product::where('category_row_id','9')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_10()
    {
        
        $data['info']=\App\Product::where('category_row_id','10')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_11()
    {
        
        $data['info']=\App\Product::where('category_row_id','11')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_12()
    {
        
        $data['info']=\App\Product::where('category_row_id','12')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_13()
    {
        
        $data['info']=\App\Product::where('category_row_id','13')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_14()
    {
        
        $data['info']=\App\Product::where('category_row_id','14')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     
     public function M_16()
    {
        
        $data['info']=\App\Product::where('category_row_id','16')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_17()
    {
        
        $data['info']=\App\Product::where('category_row_id','17')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_18()
    {
        
        $data['info']=\App\Product::where('category_row_id','18')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_19()
    {
        
        $data['info']=\App\Product::where('category_row_id','19')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_20()
    {
        
        $data['info']=\App\Product::where('category_row_id','20')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_21()
    {
        
        $data['info']=\App\Product::where('category_row_id','21')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_22()
    {
        
        $data['info']=\App\Product::where('category_row_id','22')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_23()
    {
        
        $data['info']=\App\Product::where('category_row_id','23')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
     public function M_24()
    {
        
        $data['info']=\App\Product::where('category_row_id','25')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_26()
    {
        
        $data['info']=\App\Product::where('category_row_id','26')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_27()
    {
        
        $data['info']=\App\Product::where('category_row_id','27')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_28()
    {
        
        $data['info']=\App\Product::where('category_row_id','28')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_29()
    {
        
        $data['info']=\App\Product::where('category_row_id','29')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_30()
    {
        
        $data['info']=\App\Product::where('category_row_id','30')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_31()
    {
        
        $data['info']=\App\Product::where('category_row_id','31')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_32()
    {
        
        $data['info']=\App\Product::where('category_row_id','32')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_33()
    {
        
        $data['info']=\App\Product::where('category_row_id','33')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_34()
    {
        
        $data['info']=\App\Product::where('category_row_id','34')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_35()
    {
        
        $data['info']=\App\Product::where('category_row_id','35')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_36()
    {
        
        $data['info']=\App\Product::where('category_row_id','36')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_37()
    {
        
        $data['info']=\App\Product::where('category_row_id','37')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_38()
    {
        
        $data['info']=\App\Product::where('category_row_id','38')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_39()
    {
        
        $data['info']=\App\Product::where('category_row_id','39')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_40()
    {
        
        $data['info']=\App\Product::where('category_row_id','40')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_41()
    {
        
        $data['info']=\App\Product::where('category_row_id','41')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_42()
    {
        
        $data['info']=\App\Product::where('category_row_id','42')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_43()
    {
        
        $data['info']=\App\Product::where('category_row_id','43')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_44()
    {
        
        $data['info']=\App\Product::where('category_row_id','44')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_45()
    {
        
        $data['info']=\App\Product::where('category_row_id','45')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_46()
    {
        
        $data['info']=\App\Product::where('category_row_id','46')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }
    public function M_47()
    {
        
        $data['info']=\App\Product::where('category_row_id','47')->paginate(12);

        return view('pages.products',['data'=>$data]);
    }








}
