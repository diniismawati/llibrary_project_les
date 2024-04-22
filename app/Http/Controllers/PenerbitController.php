<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index(Request $request){
        return view('penerbit');
    }

    public function penerbit(Request $request){
     // dd($erquest->all());
    $request->validate([
        'nama_penerbit'=>'required',
        'keterangan'=>'required'
        ]);
    $dataSimpan = [
        'nama_penerbit' => $request->nama_penerbit,
        'keterangan' => $request->keterangan,
        'status'=>'Aktif'
    ];
    Penerbit::create($dataSimpan);
    echo "data berhasil di simpan";
    }

    public function datapenerbit(Request $request){
        $data=[
            'datapenerbit'      => Penerbit::all()
        ];
        return view('datapenerbit', $data);
    }

    public function edit(Request $request, $id){
        $data = [
            'datapenerbit'      =>Penerbit::where('id',$id,)->first()
        ];
        return view('editpenerbit', $data);
    }

    public function ubah(Request $request, $id){
            $request->validate([
            'nama_penerbit'=>'required',
            'keterangan'=>'required'
            ]);
        $dataSimpan = [
            'nama_penerbit' => $request->nama_penerbit,
            'keterangan' => $request->keterangan,
            'status'=>'Aktif'
        ];
        Penerbit::where('id',$id)->update($dataSimpan);
        return redirect('/datapenerbit');
    }

    public function hapus(Request $request, $id){
        Penerbit::where('id',$id)->delete();
        return redirect('/datapenerbit');
    }

}
