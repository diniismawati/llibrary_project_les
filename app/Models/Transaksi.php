<?php

namespace App\Models;

use App\Models\DetailTransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'tgl_pinjam',
        'tgl_kembali'

    ];


    public function detailtransaksi(){
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
