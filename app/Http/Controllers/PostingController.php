<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;
use lluminate\Support\Facades\Storage;


class PostingController extends Controller
{
    //
    function show(){
        $data ['postings'] = Posting::all();
        return view('posting', $data);
    }

    function index(){
        $data ['postings'] = Posting::all();
        return view('viewposting', $data);
    }

    function detail(){
        $data ['postings'] = Posting::all();
        return view('detailposting', $data);

    }
    function tampil(){
        $data ['postings'] = Posting::all();
        return view('dataposting', $data);
    }
    
    function add(){
        $data=[
            'action'=>url('posting/create'),
            'tombol'=>'simpan',
            'posting'=>(object)[
                'nama_perusahaan' =>"",
                'bidang_usaha' =>"",
                'lowongan' =>"",
                'lokasi' =>"",
                'persyaratan' =>"",
                'ttl_p' =>"",
                'ttl_tp' =>"",
                'deskripsi' =>"",
                'foto' =>"",
            ],
        ];
        return view('posting',$data);
    }
    function post(request $req){
        $nama_perusahaan = $req->nama_perusahaan;
        $bidang_usaha = $req->bidang_usaha;
        $lowongan = $req->lowongan;
        $lokasi = $req->lokasi;
        $ttl_p = $req->ttl_p;
        $ttl_tp = $req->ttl_tp;
        $deskripsi = $req->deskripsi;
        // 'status' => 'konformasi'
        $foto = $req->file('foto')->store('posting');


        Posting::create([
            'nama_perusahaan' => $nama_perusahaan,
            'bidang_usaha' => $bidang_usaha,
            'lowongan' => $lowongan,
            'lokasi' => $lokasi,
            'ttl_p' => $ttl_p,
            'ttl_tp' => $ttl_tp,
            'deskripsi' => $deskripsi,
            // 'status' => 'konformasi'
            'foto' => $foto,
            
        ]);
   
        return redirect('/viewposting');
    }

    function hapus($id){
        $posting = Posting::where('id', $id)->first();
        $posting->delete();
        Storage::delete($posting->foto);

        return redirect('/viewposting');
    }

    function edit($id){
        $data['postings'] = Posting::find($id);
        return view('formposting',$data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $foto = $req->file('foto')->store('posting');
            Posting::where('id',$req->id)->update([
        'nama_perusahaan' => $req->nama_perusahaan,
        'bidang_usaha' => $req->bidang_usaha,
        'lowongan' => $req->lowongan,
        'lokasi' => $req->lokasi,
        'ttl_p' => $req->ttl_p,
        'ttl_tp' => $req->ttl_tp,
        'deskripsi' => $req->deskripsi,
        // 'foto' => $req->foto,
        'foto' => $req->file('foto')->store('posting'),

            ]);
        }else{
            Posting::where('id',$req->id)->update([
                'nama_perusahaan' => $req->nama_perusahaan,
                'bidang_usaha' => $req->bidang_usaha,
                'lowongan' => $req->lowongan,
                'lokasi' => $req->lokasi,
                'persyaratan' => $req->persyaratan,
                'ttl_p' => $req->ttl_p,
                'ttl_tp' => $req->ttl_tp,
                'deskripsi' => $req->deskripsi,
                'foto' => $req->file('foto')->store('posting'),         

            ]);
        }
        return redirect('viewposting');
    }
    public function Dikonfirmasi($id)
    {
     Posting::where('id', $id)->update(['status' => 'Dikonfirmasi']);
        // $posting = Posting::find($id);
        // $posting->status = 'Dikonfirmasi';
        // $posting->save();

        return back();        
    }
}
