<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $joinPeminjaman = Peminjaman::join('users', 'users.id', '=', 'peminjamen.id_user')
            ->join('anggotas', 'anggotas.id', '=', 'peminjamen.id_anggota')
            ->join('bukus', 'bukus.id', '=', 'peminjamen.id_buku')
            ->orderBy('peminjamen.created_at', 'desc')
            ->get([
                'peminjamen.id',
                'bukus.judul', 
                'anggotas.name',
                'anggotas.alamat',
                'anggotas.no_telp',
                'peminjamen.tgl_peminjaman',
                'peminjamen.tgl_kembali',
                'peminjamen.created_at',
                'peminjamen.status',
            ]);

        return view('peminjaman.index', compact('joinPemesanan'));
    }

    public function store(Request $request)
{
    if (Auth::check()) {
        $user = Auth::user();
        $anggota = $user->anggota;

        if ($anggota) {
            $buku = Buku::findOrFail($request->id_buku);
            Peminjaman::create([
                'id_user' => $user->id,
                'id_buku' => $request->id_buku,
                'judul' => $buku->judul,
                'id_anggota' => $anggota->id,
                'nama_anggota' => $anggota->nama,
                'alamat' => $anggota->alamat,
                'no_telp' => $anggota->no_telp,
                'status' => 'Borrowed' // Default status when first borrowed
            ]);

            return redirect('perputakaan.index')->back()->with('success', 'Pemesanan berhasil dibuat.');
        }
    }
}
}
