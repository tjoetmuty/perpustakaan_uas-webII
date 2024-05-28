<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class PerpusController extends Controller
{
    public function index(): View
   {
    $buku = Buku::latest()->get();

    return view('perpustakaan.index', compact('buku'));
   }

   public function store(Request $request): RedirectResponse
    {
        // validate form
        $request->validate([
            'judul'         => 'required',
            'pengarang'     => 'required',
            'penerbit'      => 'required',
            'tahun_terbit'  => 'required',
            'jumlah_stok'   => 'required',
            'sinopsis'      => 'required'
        ]);

        Buku::create([
            'judul'         => $request->judul,
            'pengarang'     => $request->pengarang,
            'penerbit'      => $request->penerbit,
            'tahun_terbit'  => $request->tahun_terbit,
            'jumlah_stok'   => $request->jumlah_stok,
            'sinopsis'      => $request->sinopsis,
            ]);

        //redirect to index
        return redirect()->route('perpustakaan.index')->with(['success' => 'Your data successfully saved!']);
    }

    public function show(string $id): View
    {
        $buku = Buku::findOrFail($id);

        return view('perpustakaan.show', compact('buku'));
    }
}
