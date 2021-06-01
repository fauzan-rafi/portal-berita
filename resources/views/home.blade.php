<!-- jika menggunakan master template maka kita hanya perlu memanggil nya -->
<!-- memanggil master template menggunakan @ extends('folder.namaFile') -->
@extends('layouts.app')

<!-- mengganti title tanpa menggunakan endsection-->

@section('title',"home")

      <!-- memasukan konten kedalam section yang nanti akan ditampilkan didalam yeild master -->
<div class="container">
      @section('content')

      <h1>Hello Welcome to mysite</h1>

      @endsection()
</div>

