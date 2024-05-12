<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $fillable =[
        'buku_id',
        'transaksi-id',
        'jumlah_buku',
        'status_buku'
    ];


    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'transaksi_id','id');
    }

}
