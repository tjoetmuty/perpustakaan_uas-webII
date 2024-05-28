<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Member</title>
</head>
<body class="">
<div class="overflow-x-auto ">
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
</body>
</html>