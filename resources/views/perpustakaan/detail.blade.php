<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Detail</title>
</head>
<body class="h-screen p-5 flex justify-center items-center" style="background-image: url('{{asset('assets/perpus.jpeg')}}'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="p-5 bg-white shadow-2xl rounded-lg my-5 w-1/2 h-max">
        <h1 class="text-center text-2xl mt-4 mb-2"><b>Detail</b></h1>
        <hr>
        <div class="p-6">
            <table>
                <tr>
                    <td><b>Title</b></td>
                    <td>:</td>
                    <td> {{$buku -> judul}}</td>
                </tr>
                <tr>
                    <td><b>Writer</b></td>
                    <td>:</td>
                    <td> {{$buku -> pengarang}}</td>
                </tr>
                <tr>
                    <td><b>Publiser</b></td>
                    <td>:</td>
                    <td> {{$buku -> penerbit}}</td>
                </tr>
                <tr>
                    <td><b>Publised</b></td>
                    <td>:</td>
                    <td> {{$buku -> tahun_terbit}}</td>
                </tr>
                <tr>
                    <td class=""><b>Synopsis</b></td>
                    <td>:</td>
                    <td> {{$buku -> sinopsis}}</td>
                </tr>
            </table>
            <form method="get" class="justify-end flex mt-5">
                <a href="{{route('perpustakaan.index')}}" class="btn" type="submit">Back</a>
            </form>
        </div>
    </div>
</body>
</html>