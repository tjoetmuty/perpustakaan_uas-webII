<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Perpustakaan</title>
</head>
<body class="bg-red-200">
    <button class="btn" onclick="my_modal_3.showModal()">+</button>
<div class=" grid grid-cols p-4 lg:p-8 gap-4 lg:gap-6 lg:grid-cols-3 ">
    <dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="POST" action="{{route('perpustakaan.store')}}">
        @csrf
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        <h3 class="font-bold text-lg">Hello!</h3>
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="judul" name="judul" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                </div>
                {{--alert--}}
                @error('title')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="pengarang" class="block text-gray-700 text-sm font-bold mb-2">Writer:</label>
                    <input type="text" id="pengarang" name="pengarang" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('pengarang') is-invalid @enderror" value="{{ old('pengarang') }}">
                </div>
                {{--alert--}}
                @error('pengarang')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="penerbit" class="block text-gray-700 text-sm font-bold mb-2">Publisher:</label>
                    <input type="text" id="penerbit" name="penerbit" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('penerbit') is-invalid @enderror" value="{{ old('penerbit') }}">
                </div>
                {{--alert--}}
                @error('penerbit')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="tahun_terbit" class="block text-gray-700 text-sm font-bold mb-2">Published:</label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tahun_terbit') is-invalid @enderror" value="{{ old('tahun_terbit') }}">
                </div>
                {{--alert--}}
                @error('tahun_terbit')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="jumlah_stok" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
                    <input type="number" id="jumlah_stok" name="jumlah_stok" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('jumlah_stok') is-invalid @enderror" value="{{ old('jumlah_stok') }}">
                </div>
                {{--alert--}}
                @error('jumlah_stok')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="sinopsis" class="block text-gray-700 text-sm font-bold mb-2">Sinopsis:</label>
                    <input type="text" id="sinopsis" name="sinopsis" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('sinopsis') is-invalid @enderror" value="{{ old('sinopsis') }}">
                </div>
                {{--alert--}}
                @error('sinopsis')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror
                <form method="dialog">
                    <button class="btn" type="submit">Add</button>
                </form>
        </form>
        
    </div>
    </dialog>

    @foreach ($buku as $book)
    <div class="card glass shadow-xl">
      <div class="card-body ">
        <h2 class="card-title">{{$book-> judul }}</h2>
        <p><span class="font-bold">Writer:</span> {{$book->pengarang}}</p>
        <p>{{$book->penerbit}}</p>
        <p>{{$book->tahun_terbit}}</p>
        <p class="bg-gray-400 w-6 h-6 flex justify-center items-center p-4 rounded-lg">{{$book->jumlah_stok}}</p>
        <div class="card-actions justify-end">
            <button class="btn ">Pinjam</button>
            <form method="get">
                <a href="{{route('perpustakaan.show', $book -> id)}}" class="btn" type="submit">Detail</a>
            </form>
        </div>
        
      </div>
    </div>
    @endforeach
</div>
</body>
</html>