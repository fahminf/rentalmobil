<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable =[
        'tanggal_peminjaman','tanggal_pengembalian','mobil_id','user_id','lama_peminjaman','status_mobil'
    ];
}
