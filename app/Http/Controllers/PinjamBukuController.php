<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamBukuController extends Controller
{
    public function index(Request $request){
        return view('page.pinjambuku.index');
    }
}
