<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Member</title>
</head>
<body class="">
<div class="navbar bg-white rounded-b-xl shadow-xl w-full px-8 sticky top-0 z-10">
  <div class="flex-1">
    <a class="text-xl font-extrabold">Your Library Buddies</a>
  </div>
  <div class="flex-none gap-2">
  <button class="btn" onclick="my_modal_2.showModal()">Add Member</button>
    <form action="{{route('anggota.index')}}" method="GET">
        <button class="btn" type="submit">List Member</button>
    </form>
    <form method="GET" action="{{route('peminjaman.index')}}" method="GET">
        <button class="btn" type="submit">Borrowed Book</button>
    </form>
    <div class="form-control">
      <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
    </div>
      <button class="btn" onclick="my_modal_3.showModal()">+</button>
  </div>
</div>
<div class=" grid grid-cols p-4 lg:p-8 gap-4 lg:gap-6 lg:grid-cols-3">
    <dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="POST" action="{{route('perpustakaan.store')}}">
        @csrf
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        <h3 class="font-bold text-lg mb-2">Add New Collection!</h3>
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


    <!-- Dialog Add Member -->
    <dialog id="my_modal_2" class="modal">
    <div class="modal-box">
        <form method="POST" action="{{route('anggota.store')}}">
        @csrf
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        <h3 class="font-bold text-lg mb-2">Add Member!</h3>
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="nama" name="nama" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('name') is-invalid @enderror" value="{{ old('nama') }}">
                </div>
                {{--alert--}}
                @error('name')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('email') is-invalid @enderror" value="{{ old('email') }}">
                </div>
                {{--alert--}}
                @error('email')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="no_telp" class="block text-gray-700 text-sm font-bold mb-2">Phone Number:</label>
                    <input type="number" id="no_telp" name="no_telp" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}">
                </div>
                {{--alert--}}
                @error('no_telp')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                    <input type="text" id="alamat" name="alamat" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                </div>
                {{--alert--}}
                @error('alamat')
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                    <p class="font-bold">{{ $message }}</p>
                </div>
                @enderror

                <div class="mb-4">
                    <label for="tanggal_daftar" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                    <input type="date" id="tanggal_daftar" name="tanggal_daftar" class="border border-gray-300 rounded-md py-2 px-3 w-full @error('tanggal_daftar') is-invalid @enderror" value="{{ old('tanggal_daftar') }}">
                </div>
                {{--alert--}}
                @error('tanggal_daftar')
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
<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($anggota as $member)
      <tr>
        <td>
          <div class="flex items-center gap-3">
            <div>
              <div class="font-bold">{{$member -> nama}}</div>
              <div class="text-sm opacity-50">Member</div>
            </div>
          </div>
        </td>
        <td>
          {{$member -> email}}
        </td>
        <td>{{$member -> alamat}}</td>
        <td>{{$member -> no_telp}}</td>
      </tr>
      @endforeach
    </tbody>
    <!-- foot -->
    <tfoot>
      <tr>
      <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone Number</th>
      </tr>
    </tfoot>
  </table>
</div>
<div class="btm-nav">
  <button>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
    <span class="btm-nav-label">Home</span>
  </button>
  <button class="active">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span class="btm-nav-label">Warnings</span>
  </button>
  <button>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
    <span class="btm-nav-label">Statics</span>
  </button>
</div>
</body>
</html>