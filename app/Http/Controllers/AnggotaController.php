<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class AnggotaController extends Controller
{
    public function index() :View{
        $anggota = Anggota::latest()->paginate(10);

        return view('anggota.index', compact('anggota'));
    }

    public function store(Request $request): RedirectResponse
   {
       // validate form
      $request->validate([
         'nama' => 'required',
         'email' => 'required',
         'no_telp' => 'required',
         'alamat' => 'required',
         'tanggal_daftar' => 'required',
       ]);


      Anggota::create([
         'nama' => $request -> nama,
         'email' => $request -> email,
         'no_telp' => $request -> no_telp,
         'alamat' => $request -> alamat,
         'tanggal_daftar' => $request -> tanggal_daftar,
        ]);

      return redirect()->route("anggota.index");
    }
}
