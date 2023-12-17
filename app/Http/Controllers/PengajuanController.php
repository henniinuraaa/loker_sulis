<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    //
    function show(){
        $data ['pengajuans'] = Pengajuan::all();
        return view('pengajuan', $data);
    }
    function index(){
        $data ['pengajuans'] = Pengajuan::all();
        return view('viewpengajuan', $data);
    }
    function view(){
        $data ['pengajuans'] = Pengajuan::all();
        return view('datapengajuan', $data);
    }

    
    function add(){
        $data=[
            'action'=>url('pengajuan/create'),
            'tombol'=>'simpan',
            'posting'=>(object)[
                'nama_lengkap' =>"",
                'email' =>"",
                'nama_perusahaan' =>"",
                'no_hp' =>"",
                'tempat_lahir' =>"",
                'tgl_lahir' =>"",
                'nilai_rata' =>"",
                'jurusan' =>"",
                'jk' =>"",
                'thn_lulus' =>"",
                'tinggi_badan' =>"",
                'berat_badan' =>"",

            ],
        ];
        return view('pengajuan',$data);
    }
    function post(Request $req)
    {
        $nama_lengkap = $req->nama_lengkap;
        $email = $req->email;
        $nama_perusahaan = $req->nama_perusahaan;
        $no_hp = $req->no_hp;
        $tempat_lahir = $req->tempat_lahir;
        $tgl_lahir = $req->tgl_lahir;
        $nilai_rata = $req->nilai_rata;
        $jurusan = $req->jurusan;
        $jk = $req->jk;
        $thn_lulus = $req->thn_lulus;
        $tinggi_badan = $req->tinggi_badan;
        $berat_badan = $req->berat_badan;
    
        Pengajuan::create([
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'nama_perusahaan' => $nama_perusahaan,
            'no_hp' => $no_hp,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'nilai_rata' => $nilai_rata,
            'jurusan' => $jurusan,
            'jk' => $jk,
            'thn_lulus' => $thn_lulus,
            'tinggi_badan' => $tinggi_badan,
            'berat_badan' => $berat_badan,
        ]);
    
        return redirect('/viewpengajuan');
    }

    function hapus($id){
        $pengajuan = Pengajuan::where('id', $id)->first();
        $pengajuan->delete();
        // Storage::delete($posting->foto);

        return redirect('/viewpengajuan');
    }

    function edit($id){
        $data['pengajuans'] = Pengajuan::find($id);
        return view('formpengajuan',$data);
    }

    function update(Request $req){     
            Pengajuan::where('id', $req->id)->update([
            'nama_lengkap' => $req->nama_lengkap,
            'email' => $req->email,
            'nama_perusahaan' => $req->nama_perusahaan,
            'no_hp' => $req->no_hp,
            'tempat_lahir' => $req->tempat_lahir,
            'tgl_lahir' => $req->tgl_lahir,
            'nilai_rata' => $req->nilai_rata,
            'jurusan' => $req->jurusan,
            'jk' => $req->jk,
            'thn_lulus' => $req->thn_lulus,
            'tinggi_badan' => $req->tinggi_badan,
            'berat_badan' => $req->berat_badan,
            ]);
            return redirect('/viewpengajuan');
        
}

public function Dikonfirmasi($id)
{
 Pengajuan::where('id', $id)->update(['status' => 'Dikonfirmasi']);
    // $posting = Posting::find($id);
    // $posting->status = 'Dikonfirmasi';
    // $posting->save();

    return back();        
}

}

