<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request){
        // $data =[
        //     'databuku' =>Buku::all(),
        //     'kategori' =>Kategori::all(),
        //     'penerbit'=>Penerbit::all()
        // ];
        // return view('bukus', $data);
        return view('page.buku.index');
    }

    public function buku(Request $request){
    // dd($erquest->all());
    $request->validate([
        'judul_buku'    =>'required',
        'penulis'       =>'required',
        'penerbit_id'   =>'required',
        'tahun_terbit'  =>'required'
    ]);
    $dataBuku = [
        'judul_buku'     =>$request->judul_buku,
        'penulis'        =>$request->penulis,
        'penerbit_id'    =>$request->penerbit_id,
        'tahun_terbit'   =>$request->tahun_terbit,
        'kategori_id'    =>'123',
        'status'         =>'Aktif',
        'pictures'       =>'default.jpg'
    ];
    Buku::create($dataBuku);
    echo "data berhasil di simpan";
    }

    public function databuku(Request $request){
        $data=[
            'databuku'      => Buku::all()
        ];
        return view('databuku', $data);
    }

    public function edit(Request $request, $id){
        $data=[
            'databuku'  =>Buku::where('id',$id)->first()
        ];
        return view('editbuku',$data);
    }

    public function ubah(Request $request, $id){
        $request->validate([
            'judul_buku'    =>'required',
            'penulis'       =>'required',
            'penerbit_id'   =>'required',
            'tahun_terbit'  =>'required'
        ]);
        $dataBuku = [
            'judul_buku'     =>$request->judul_buku,
            'penulis'        =>$request->penulis,
            'penerbit_id'    =>$request->penerbit_id,
            'tahun_terbit'   =>$request->tahun_terbit,
            'kategori_id'    =>'123',
            'status'         =>'Aktif',
            'pictures'       =>'default.jpg'
        ];
        Buku::where('id',$id)->update($dataBuku);
        return redirect('/databuku');
    }

    public function hapus(Request $request, $id){
        Buku::where('id',$id)->delete();
        return redirect('/databuku');
    }
}
