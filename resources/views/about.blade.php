<!-- jika menggunakan master template maka kita hanya perlu memanggil nya -->
<!-- memanggil master template menggunakan @ extends('folder.namaFile') -->
@extends('layouts.app')

@section('title','about')
      <!-- memasukan konten kedalam section yang nanti akan ditampilkan didalam yeild master -->
<div class="container">
      @section('content')

      About

      @endsection()
</div>