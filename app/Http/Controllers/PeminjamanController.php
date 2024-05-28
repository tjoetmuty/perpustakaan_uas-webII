<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function showForm()
    {
        $joinPemesanan = Pemesanan::join('anggotas', 'anggotas.id', '=', 'peminjamen.id_anggota')
            ->join('bukus', 'bukus.id', '=', 'peminjamen.id_buku')
            ->orderBy('peminjamen.created_at', 'desc')
            ->get([
                'anggotas.id', 
                'anggotas.name',
                'bukus.nama_album', 
                'bukus.nama_album', 
                'peminjamen.tanggal_peminjaman',
                'peminjamen.tanggal_kembali',
                'peminjamen.created_at',
                'peminjamen.status',
            ]);

        return view('peminjaman.index', compact('joinPemesanan'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $anggota = $anggota->Anggota;

            if ($anggota) {
                $anggota = Anggota::findOrFail($request->id_buku);
                    Pemesanan::create([
                        'id_user' => $user->id,
                        'id_anggota' => $request->id_album,
                        'id_' => $alamat->id,
                        'alamat' => $alamat->alamat,
                        'negara' => $alamat->negara,
                        'provinsi' => $alamat->provinsi,
                        'kota' => $alamat->kota,
                        'kode_pos' => $alamat->kode_pos,
                        'nomor_hp' => $alamat->nomor_hp,
                        'status' => 'Pesanan Berhasil Dibuat' // Default status saat pertama kali memesan
                    ]);

                    return redirect()->back()->with('success', 'Pemesanan berhasil dibuat.');
                }
            }
    }
}
