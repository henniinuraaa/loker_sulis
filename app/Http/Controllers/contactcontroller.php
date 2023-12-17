<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class contactcontroller extends Controller
{
    //
    function index(){
        $data ['contacts'] = Contact::all();
        return view('viewcontact', $data);
    }

    function add(){
        $data=[
            'action'=>url('contact/create'),
            'tombol'=>'simpan',
            'contact'=>(object)[
                'nama' =>"",
                'pesan' =>"",
                'foto' =>"",
            ],
        ];
        return view('tampilperusahaan',$data);
    }
    function post(request $req){
        $nama = $req->nama;
        $pesan = $req->pesan;
        // $foto = $req->foto;


        Contact::create([
            'nama' =>  $nama,
            'pesan' =>  $pesan,
            // 'foto' => $foto,
            
        ]);

        function hapus($id){
            $contact = contact::where('id', $id)->first();
            $contact->delete();
            Storage::delete($posting->foto);
    
            return redirect('/viewcontact');
        }
    
        function edit($id){
            $data['contacts'] = contact::find($id);
            return view('formcontact',$data);
        }

        function update(Request $req){
            if($req->file('foto')){
                $foto = $req->file('foto')->store('posting');
                contact::where('id',$req->id)->update([
            'nama' => $req->nama,
            'pesan' => $req->pesan,
            'foto' => $req->foto,
    
                ]);
            }else{
                contact::where('id',$req->id)->update([
                    'nama' => $req->nama,
                    'pesan' => $req->pesan,
                    // 'foto' => $req->file('foto')->store('contacts'),         
    
                ]);
            }
            return redirect('viewcontact');
        }
    }
}
