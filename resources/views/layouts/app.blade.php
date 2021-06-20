<!-- ini untuk master dari semua view website -->
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- untuk memngganti tittle disetiap page nya menggunakan yield , yield sendiri digunakan ketika ada perubahan khusus dihalaman tertentu -->
      <title>{{ $title ?? ''}}</title>
      <!-- memanggil boostrap dari folder public hanya dengan -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

      <!-- untuk include file pada laravel -->
      @include('layouts.navigation')

      <!-- permasalahan muncul ketika setiap website yang muncul menggunakan isi yang berbeda maka dari itu pada master nya dapat menggunakan fungsi @ yield ('content')dan pada childnya menggunakan @ section ('content') pada awalnya dan akhirnya @ endSection 
      -->
      <!-- jika kita ingin menambahkan class agar semua konten disetiap halaman menerima action yang sama maka kita definisikan pada app contoh disini padding -->

      <div class="p-4">
            @include('alert')
            @yield('content')
      </div>

      <div class="p-4">
            @yield('testing')
      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

      <script>
            $(document).ready(function() {
                  $('.select2').select2({
                        placeholder: "Choose tags!"
                  });
            });
      </script>
</body>

</html>