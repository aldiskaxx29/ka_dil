@extends('templates.master')

@section('title','Detail Pengaduan')

@section('content')
<style>
    th{
        width: 100px;
    }
</style>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Nama</th>
                <td>{{$item->nama_lengkap}}</td>
            </tr>    
            <tr>
                <th>Tempat</th>
                <td>{{$item->tempat}}</td>
            </tr>    
            <tr>
                <th>Tanggal Lahiir</th>
                <td>{{$item->tanggal_lahir}}</td>
            </tr>    
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{$item->jenis_kelamin}}</td>
            </tr>    
            <tr>
                <th>Pekerjaan</th>
                <td>{{$item->pekerjaan}}</td>
            </tr>    
            <tr>
                <th>Kewarganegaraan</th>
                <td>{{$item->kewarganegaraan}}</td>
            </tr>    
            <tr>
                <th>Alamat</th>
                <td>{{$item->alamat}}</td>
            </tr>    
            <tr>
                <th>Keterangan</th>
                <td>{{$item->keterangan}}</td>
            </tr>    
            <tr>
                <th>Status</th>
                <td>
                    @if ($item->status == 0)
                        <small class="badge badge-warning" data-toggle="modal" data-target="#exampleModalAcc" style="cursor:pointer">Pending</small>    
                    @elseif($item->status == 1)
                        <small class="badge badge-success">Success</small>                        
                    @elseif($item->status == 2)
                        <small class="badge badge-danger">Gagal</small>                          
                    @endif
                </td>
            </tr>    
            <tr>
                <th>Gambar</th>
                <td><img src="/image/{{$item->gambar}}" alt="" width="100px"></td>
            </tr>   
            <tr>
                <th>
                    <a href="{{route('dataPengaduan')}}" class="btn btn-light">Back</a> 
                </th>
            </tr>
        </table>    
    </div>    
</div>    
@endsection