<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_buku',
        'id_anggota',
        'tgl_peminjaman',
        'tgl_kembali',
        'status',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
