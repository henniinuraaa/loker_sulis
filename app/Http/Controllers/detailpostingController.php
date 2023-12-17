<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posting;
class detailpostingController extends Controller
{
    //
    function show(){
        $data['postings'] = posting::all();
        return view('detailposting',$data);
    }
}
