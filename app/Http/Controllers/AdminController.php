<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    //
    function show(){
        return view('akunadmin');
    }
    function index(){
        return view('dashboardadmin');
    }
    function admin(){
        return view('admin');
    }
        
    function auth(Request $req){
        $scredentials = $req->only('email','password');
        if(Auth::attempt($scredentials)){
            return redirect()->intended('/tampilperusahaan');
        }
        // return back();
        return redirect('/dashboard');

    }
    function logout(Request $req){
        Auth::logout();
        return redirect('/admin');

    }
}
