@extends('templates.master')

@section('title','Status Pengaduan')

@section('content')
<div class="card">
    <div class="card-body">
        @if (session('message'))   
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('message') }}
                </div>
            </div>            
        @endif
        {{-- <a href="" class="btn btn-primary"><i class="fas fa-plush"></i> Tambah Data</a> --}}
        <hr>
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Kewarganegaraan</th>
                    <th>Status</th>
                    <th>Download</th>
                    <th>Action</th>
                </tr>
            </thead>
               
            <tbody>
                @if(empty($status))
                    <div class="alert alert-danger">
                        Tidak Ada Laporan Pengaduan
                    </div>
                @else   
                @foreach ($status as $no => $item)
                <tr>
                    <td>{{$no + 1}}</td>
                    <td>{{$item->nama_lengkap}}</td>
                    <td>{{$item->tempat}} {{$item->tanggal_lahir}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->pekerjaan}}</td>
                    <td>{{$item->kewarganegaraan}}</td>
                    <td>
                        @if ($item->status == 0)
                            <small class="badge badge-warning">Belum Di Acc</small>
                        @elseif($item->status == 1)
                            <small class="badge badge-success">Sudah Di Acc</small>
                        @elseif($item->status == 2)
                            <small class="badge badge-danger">Gagal</small>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($item->status == 0)
                            <small >Belum Ada</small>
                        @elseif($item->status == 1)
                            <a href="{{url('download_laporan/' . $item->id_pengaduan)}}" class="text-center"><i class="fas fa-download" style="font-size: 24px;text-align:center;"></i></a>
                        @elseif($item->status == 2)
                            <small>Gagal</small>
                        @endif
                    </td>
                    <td>
                        {{-- <a href="" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a> --}}
                        <a href="{{route('editlPengaduan.user', $item->id_pengaduan)}}" class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i></a>
                        <a href="{{route('detailPengaduan.user', $item->id_pengaduan)}}" class="btn btn-info btn-sm" ><i class="fas fa-eye"></i></a>
                    </td>
                </tr>                    
                @endforeach  
                @endif                            
                
               
            </tbody>
        </table>


    </div>    
</div>    
@endsection