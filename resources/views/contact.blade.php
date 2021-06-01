<!-- jika menggunakan master template maka kita hanya perlu memanggil nya -->
<!-- memanggil master template menggunakan @ extends('folder.namaFile') -->
@extends('layouts.app')

@section('title','contact')
      <!-- memasukan konten kedalam section yang nanti akan ditampilkan didalam yeild master -->
<div class="container">
      @section('content')

      Contact

      @endsection()
</div>