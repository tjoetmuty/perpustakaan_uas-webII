<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit</title>
</head>
<body class="h-screen p-5 flex justify-center" style="background-image: url('{{asset('assets/perpus.jpeg')}}'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="p-5 glass rounded-lg my-5 w-1/2">
        <form method="POST" action="{{route('perpustakaan.update', $buku -> id)}}">
                @csrf
                @method('PUT')
                <h2 class="font-bold text-2xl mb-2">Update Book!</h2>
                <hr>
                        <div class="mb-4 mt-4">
                            <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" id="judul" name="judul" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('judul') is-invalid @enderror" value="{{ old('judul', $buku->judul) }}">
                        </div>
                        {{--alert--}}
                        @error('title')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
        
                        <div class="mb-4">
                            <label for="pengarang" class="block text-gray-700 text-sm font-bold mb-2">Writer:</label>
                            <input type="text" id="pengarang" name="pengarang" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('pengarang') is-invalid @enderror" value="{{ old('pengarang', $buku->pengarang) }}">
                        </div>
                        {{--alert--}}
                        @error('pengarang')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
        
                        <div class="mb-4">
                            <label for="penerbit" class="block text-gray-700 text-sm font-bold mb-2">Publisher:</label>
                            <input type="text" id="penerbit" name="penerbit" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('penerbit') is-invalid @enderror" value="{{ old('penerbit', $buku->penerbit) }}">
                        </div>
                        {{--alert--}}
                        @error('penerbit')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
        
                        <div class="mb-4">
                            <label for="tahun_terbit" class="block text-gray-700 text-sm font-bold mb-2">Published:</label>
                            <input type="number" id="tahun_terbit" name="tahun_terbit" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tahun_terbit') is-invalid @enderror" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
                        </div>
                        {{--alert--}}
                        @error('tahun_terbit')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
        
                        <div class="mb-4">
                            <label for="jumlah_stok" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
                            <input type="number" id="jumlah_stok" name="jumlah_stok" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('jumlah_stok') is-invalid @enderror" value="{{ old('jumlah_stok', $buku->jumlah_stok) }}">
                        </div>
                        {{--alert--}}
                        @error('jumlah_stok')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
        
                        <div class="mb-4">
                            <label for="sinopsis" class="block text-gray-700 text-sm font-bold mb-2">Sinopsis:</label>
                            <input type="text" id="sinopsis" name="sinopsis" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('sinopsis') is-invalid @enderror" value="{{ old('sinopsis', $buku->sinopsis) }}">
                        </div>
                        {{--alert--}}
                        @error('sinopsis')
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                            <p class="font-bold">{{ $message }}</p>
                        </div>
                        @enderror
                        <form method="dialog flex justify-center">
                            <button class="btn bg-yellow-200 w-full" type="submit">Update</button>
                        </form>
                </form>
    </div>
</body>
</html>