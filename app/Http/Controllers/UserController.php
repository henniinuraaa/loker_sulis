<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;
use illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
      
    function register(){
        return view('register');
    }

    function login(){
        return view('login');
    }

    function view(){
        return view('/');
    }
    function show(){
        return view('template');
    }
    function index(){
        return view('dashboard');
    }

    function post(Request $req){
        $nisn = $req->nisn;
        $name = $req->name;
        $email = $req->email;
        $tahun_lulus = $req->tahun_lulus;
        $password = $req->password;
        $img = $req->image;
  
       
        user::create([
            'nisn' =>$nisn,
            'name' =>$name,
            'email' =>$email,
            'tahun_lulus' =>$tahun_lulus,
            'password'=>$password,
            'image' => $img,
        ]);
        $validate['password'] = bcrypt($req->password);
         if ($req->hasFile('image')){
               $validate['image'] = $req->file('image')->store('image');
         }

        return redirect ('/login');
    }

    
    function auth(Request $req){
        $scredentials = $req->only('email','password');
        if(Auth::attempt($scredentials)){
            return redirect()->intended('tampilperusahaan');
        }
        // return back();
        return view('/dashboard');

    }
    
}
