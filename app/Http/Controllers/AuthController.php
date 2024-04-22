<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
//login//
    public function index(Request $request){
        return view('login2');
    }
    public function register(Request $request){
        return view('register');
    }

    public function registered(Request $request){
       // dd($erquest->all());
        $request->validate([
        'nama_lengkap'=>'required',
        'email'=>'required',
        'password'=>'required',
        'jenis_kelamin'=>'required'
        ]);
    $dataStore = [
        'nama_lengkap' => $request->nama_lengkap,
        'email' => $request->email,
        'role' => "Peminjam",
        'jenis_kelamin' =>$request->jenis_kelamin,
        'picture' => "Default.jpg",
        'password' => Hash::make($request->password),
    ];
    User::create($dataStore);
    echo "data berhasil di simpan";
    }

    public function ceklogin(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/datakategori');
        }else{
            echo"Login Gagal";
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function kategori(Request $request){
        return view('kategoris');
    }

    public function bukus(Request $request){
        return view('bukus');
    }

    public function Penerbit(Request $request){
        return view('penerbit');
    }
//logout//

//input user

}
