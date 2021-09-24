<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Cetak laporan</title>
  </head>
  <body>
    <h1 class="text-center">Data Laporan Pengaduan</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat/Tanggal Lahir</th>
                {{-- <th>Jenis Kelamin</th> --}}
                <th>Kewarganegaraan</th>
                <th>Status Laporan</th>
                <th>Alamat</th>
                {{-- <th>Keterngan</th>
                <th>Gambar</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $no => $item)
            <tr>
                <td>{{$no+1}}</td>
                <td>{{$item->nama_lengkap}}</td>
                <td>{{$item->tanggal_lahir}}</td>
                {{-- <td>{{$item->jenis_kelamin}}</td> --}}
                <td>{{$item->kewarganegaraan}}</td>
                <td>
                    @if ($item->status == 0)
                        <small class="badge badge-warning" data-toggle="modal" data-target="#exampleModalAcc{{$item->id_pengaduan}}" style="cursor:pointer">Pending</small>    
                    @elseif($item->status == 1)
                        <small class="badge badge-success">Success</small>                        
                    @elseif($item->status == 2)
                        <small class="badge badge-danger">Gagal</small>                          
                    @endif
                </td>
                <td>Sepatan</td>
            </tr>                    
            @endforeach
        </tbody>
    </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>