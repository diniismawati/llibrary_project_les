<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
