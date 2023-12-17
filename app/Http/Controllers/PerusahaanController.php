<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Posting;
use App\Models\contact;


class PerusahaanController extends Controller
{
    //
    function tampil(){
        $data['postings'] = Posting::all();
        $data['contacts'] = Contact::all();
        $data['perusahaans'] = Perusahaan::all();
        return view('welcome',$data);
    }
    function show(){
        $data ['perusahaans'] = Perusahaan::all();
        return view('perusahaan', $data);
    }
    function index(){
        $data ['perusahaans'] = Perusahaan::all();
        return view('viewperusahaan', $data);
    }
       
    function add(){
        $data=[
            'action'=>url('posting/create'),
            'tombol'=>'simpan',
            'posting'=>(object)[
                'nama_perusahaan' =>"",
                'deskripsi' =>"",
                'foto' =>"",
            ],
        ];
        return view('perusahaan',$data);
    }
    function post(request $req){
        $nama_perusahaan = $req->nama_perusahaan;
        $deskripsi = $req->deskripsi;
        $foto = $req->file('foto')->store('perusahaan');


        Perusahaan::create([
            'nama_perusahaan' => $nama_perusahaan,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
            
        ]);
   
        return redirect('/viewperusahaan');
    }
    function hapus($id){
        $perusahaan = Perusahaan::where('id', $id)->first();
        $perusahaan->delete();
        // Storage::delete($posting->foto);

        return redirect('/viewperusahaan');
    }

    function edit($id){
        $data['perusahaans'] = Perusahaan::find($id);
        return view('formperusahaan',$data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $foto = $req->file('foto')->store('perusahaan');
            Perusahaan::where('id',$req->id)->update([
        'nama_perusahaan' => $req->nama_perusahaan,
        'deskripsi' => $req->deskripsi,
        'foto' => $req->file('foto')->store('perusahaan'),

            ]);
        }else{
            Perusahaan::where('id',$req->id)->update([
                'nama_perusahaan' => $req->nama_perusahaan,
                'deskripsi' => $req->deskripsi,
                'foto' => $req->file('foto')->store('perusahaan'),                

            ]);
        }
        return redirect('viewperusahaan');
    }
}
