@extends('templates.master')

@section('title','Detail Petugas')

@section('content')
    <div class="card">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: {{$item->nama_lengkap}}</td>
                    </tr>
                    {{-- <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <td>: {{$item->tempat}} {{$item->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{$item->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td>: {{$item->pekerjaan}}</td>
                    </tr>
                    <tr>
                        <th>Kewarganegaraan</th>
                        <td>: {{$item->kewarganegaraan}}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>: {{$status->alamat}}</td>
                    </tr> --}}
                </table>
            </div>   
        </div>    
</div>    
@endsection