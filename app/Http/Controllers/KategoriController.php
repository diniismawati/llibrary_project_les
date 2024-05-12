<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request){
        return view('page.kategori.index');
    }

    public function kategori(Request $request){
     // dd($erquest->all());
    $request->validate([
        'nama_kategori' =>'required',
        'keterangan'    =>'required'
        ]);
    $dataKategori = [
        'nama_kategori' => $request->nama_kategori,
        'keterangan'    => $request->keterangan,
        'status'        =>'Aktif'
    ];
    Kategori::create($dataKategori);
    echo "data berhasil di simpan";
    }

    public function datakategori(Request $request){
        $data=[
            'datakategori'      => Kategori::all()
        ];
        return view('datakategori', $data);
    }

    public function edit(Request $request, $id){
        $data = [
            'datakategori'      =>Kategori::where('id',$id)->first()
        ];
        return view('editkategori', $data);
    }

    public function ubah(Request $request, $id){
            $request->validate([
            'nama_kategori' =>'required',
            'keterangan'    =>'required'
            ]);
        $dataKategori = [
            'nama_kategori' => $request->nama_kategori,
            'keterangan'    => $request->keterangan,
            'status'        =>'Aktif'
        ];
        Kategori::where('id',$id)->update($dataKategori);
        return redirect('/datakategori');
    }

    public function hapus(Request $request, $id){
    Kategori::where('id',$id)->delete();
    return redirect('/datakategori');
    }

}
