<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .footer{
            margin-bottom:5px;
            overflow:hidden;
        }
        .kiri{
            width:50%;
            text-align: center;
        }
        .kanan{
            width:50%;
            text-align: center;
        }
        th{
            text-align: left;
        }
    </style>
</head>
<body>
    {{-- <h1>{{$judul}}</h1> --}}
    <div class="atas" style="width:390px;text-align:center;">
        <p>KEPOLISIAN DAERAH BANTEN <br>
            RESOR  KOTA TANGERANG <br>
                    SEKTOR MAUK <br>
         JL.Raya otista No. 02 Mauk 15530 tlp.021 59330110</p>
    </div>
    <div class="img" style="text-align:center;">
        <img src="image/logo_polri.png" alt="" width="65px" style="floar:left;">
        {{-- <img src="{{ public_path('img/logo.png')}}" alt="BTS"> --}}
        {{-- <img src="{{ url('image/Lambang_Polri.png') }}" width="70px" style="display:block;margin-left:auto;margin-right:auto;"> --}}
        <p style="font-weight: bold;text-decoration:underline;">SURAT TANDA BUKTI LAPORAN KEHILANGAN BARANG / SURAT – SURAT PENTING</p>
        <p>Nomor  : STPLK / C/ 00{{$data->id}} / YAN.2.95/ @php
            $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
            $bln = $array_bln[date('n')];
            echo $bln;
        @endphp / 202I /  Sek. Mauk.</p>
    </div>
    <div class="conten" style="text-align: left;">
        <p>-------- Yang bertanda tangan dibawah ini menerangkan bahwa pada hari {{$today}} Tanggal {{date('Y/m/d')}}  sekira 
        jam {{date('G:i:s')}} Wib, Telah datang ke polsek Mauk , Mengaku Bernama: ----------------------------------------------------</p>

        <table style="margin-left: 80px;">
            <tr>
                <th>Nama</th>
                <td>: {{$data->nama_lengkap}}</td>
            </tr>
            <tr>
                <th>Tempat/Tanggall Lahir</th>
                <td>: {{$data->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>: {{$data->jenis_kelamin}}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>: {{$data->pekerjaan}}</td>
            </tr>
            <tr>
                <th>Kewarganegaraan</th>
                <td>: {{$data->kewarganegaraan}}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>: {{$data->alamat}}</td>
            </tr>
        </table>
        <p>Telah Melaporkan Bahwa Telah Terjadi Kehilangan Barang/Benda Dan Surat-Surat Penting Sebagai Berikut  :</p>
        <p>
            -- {{$data->keterangan}}
        </p>
        
        <table>
            <tr>
                <th>Terjadi pada </th>
                <td></td>
            </tr>
            <tr>
                <th>Pada hari/ Tanggal</th>
                <td>: {{$data->tanggal_kejadian}}</td>
            </tr>
            <tr>
                <th>Tempat Kejadian</th>
                <td>: {{$data->tempat_kejadian}}</td>
            </tr>
        </table>

        <p>Demikian Surat Tanda Penerimaan Laporan / Pengaduan Kehilangan Barang / Surat-Surat Penting ini dibuat dapat dipergunakan sebagaimana mestinya.</p>        
    </div>

    <div class="footer">
        {{-- <div class="row">
            <div class="col-md-5 text-center" style="width: 100%;">
                <p>PELAPOR <br><br><br><br><br>


                (---------------------------)  
                </p>
            </div>
            <div class="col-md-5 text-center">
                <p>
                    Mauk,……………………. <br>
                    An. KEPALA KEPOLISIAN SEKTOR MAUK <br>
                    BA.SPK POK ‘B’ <br><br><br><br>
    
    
                    ADI NURMANSYAH, S.H <br>
                    BRIGADIR NRP 85082085
                </p>   
            </div>
        </div> --}}
        <table class="table">
            <tr>
                <th>
                    <p class="text-center">PELAPOR <br><br><br><br><br>


                    ( {{$data->nama_lengkap}} )   
                    </p>
                </th>
                <th>
                    <p class="text-center">
                        Mauk, {{date('d F, Y')}} Tangerang. <br>
                        An. KEPALA KEPOLISIAN SEKTOR MAUK <br>
                        BA.SPK POK ‘B’<br>
                        <img src="image/pa1.png" alt="" width="100px" style="floar:left;"><br>
                        <u>ADI NURMANSYAH, S.H</u> <br>
                        BRIGADIR NRP 85082085
                    </p>  
                </th>
            </tr>
        </table>
    </div>
    <p>Catatan :</p>
    <i>Surat keterangan laporan kehilangan ini untuk mengurus kembali surat – surat yang akan hilang tidak untuk sebagai penggantinya dan berlaku selama 15 (lima belas) hari terhitung sejak surat ini dikeluarkan</i>        
    {{-- <script>
        window.print();
    </script> --}}


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>