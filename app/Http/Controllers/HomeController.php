<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        If(Auth::user()->user_type==1)
            return view('home');
        else
            return view('pages.welcome');
    }

    public function profile($id){

        $data['info'] = \App\User::where('id',$id)->first();
        return view('user',['data'=>$data]);

        
    }
}
