<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_buku',
        'judul',
        'id_anggota',
        'nama',
        'alamat',
        'no_telp',
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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
