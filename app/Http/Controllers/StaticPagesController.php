<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{

    public function home(){
        return view('static_pages/home');
    }
     public function help(){
        return view('static_pages/help');
    }
     public function about(){
        return view('static_pages/about');
    }
    //
    //  public function create(){
    //     return view('sessions.create');
    // }

    // public function store(Request $request){
    //     $credentials = this->validate($reqeust,[
    //             'email'=>'required|email|max:255',
    //             'password'=>'required',
    //         ]);

    //     if(Auth::attempt($credentials)){
    //         session()->flash('success','欢迎回来！');
    //         return redirect()->route('users.show',[Auth::user()]);
    //     }else{
    //         session()->flash('danger','抱歉，邮箱和密码不匹配');
    //         return redirect()->back()->withInput();
    //     }
    // }
    // public function destory(){
    //     return;
    // }
}
