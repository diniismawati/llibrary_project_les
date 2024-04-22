<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penerbit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penerbit',
        'keterangan',
        'status'
    ];
    protected $table ='penerbit';

    //relasi ke table buku
    public function buku(){
        return $this->hasMany(Buku::class, 'penerbit_id', 'id');
    }
}
