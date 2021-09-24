@extends('templates.master')

@section('title','Detail Pengaduan')

@section('content')
    <div class="card">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: {{$status->nama_lengkap}}</td>
                    </tr>
                    <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <td>: {{$status->tempat}} {{$status->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{$status->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td>: {{$status->pekerjaan}}</td>
                    </tr>
                    <tr>
                        <th>Kewarganegaraan</th>
                        <td>: {{$status->kewarganegaraan}}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>: {{$status->alamat}}</td>
                    </tr>
                    <tr>
                        <th><a href="{{url('status_Pengaduan')}}" class="btn btn-light">Back</a></th>
                    </tr>
                </table>
            </div>    
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Status</th>
                        <td>: 
                            @if ($status->status == 0)
                                <small class="badge badge-warning">Pending</small>
                            @else
                                <small class="badge badge-suucess">Acc</small>                               
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Kejadian</th>
                        <td>: {{$status->tanggal_kejadian}}</td>
                    </tr>
                    <tr>
                        <th>Tempat Kejadian</th>
                        <td>: {{$status->tempat_kejadian}}</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>: {{$status->keterangan}}</td>
                    </tr>
                    <tr>
                        <th>Bukti Kejadian</th>
                        <td>: 
                            <img src="/image/{{$status->gambar}}" alt="" width="100px">
                            <img src="/image/{{$status->gambar2}}" alt="" width="100px">
                            <img src="/image/{{$status->gambar3}}" alt="" width="100px">
                        </td>
                    </tr>
                </table>
            </div>    
        </div>    
</div>    
@endsection