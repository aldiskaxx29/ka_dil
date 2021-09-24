@extends('templates.master')

@section('title','Edit Pengaduan')

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

        <form action="{{route('updatePengaduan.user',$item->id_pengaduan)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nama</label>
                {{-- <input type="hidden" value="{{$item->id}}" name="id"> --}}
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{$item->nama_lengkap}}" name="nama_lengkap" readonly>
                @error('nama_lengkap')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tempat</label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror" value="{{$item->tempat}}" name="tempat">
                        @error('tempat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{$item->tanggal_lahir}}" name="tanggal_lahir">
                        @error('tanggal_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="L" @if ($item->jenis_kelamin == 'Laki - laki') checked @endif>
                            <label class="form-check-label" for="jenis_kelamin1">
                                Laki - laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="P" @if ($item->jenis_kelamin == 'Perempuan') checked @endif>
                            <label class="form-check-label" for="jenis_kelamin2">
                              Perempuan
                            </label>
                        </div>
                        @error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Pekerjaan</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{$item->pekerjaan}}" name="pekerjaan">
                        @error('pekerjaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" value="{{$item->kewarganegaraan}}" name="kewarganegaraan">
                        @error('kewarganegaraan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" class="form-control @error('alamat') is-invalid @enderror" cols="30" rows="10">{{$item->alamat}}</textarea>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="" class="form-control @error('keterangan') is-invalid @enderror" cols="30" rows="10">{{$item->keterangan}}</textarea>
                @error('keterangan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            {{-- <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gambar">Upload Bukti Pengaduan</label>
                        <img src="/image/{{$item->gambar}}" alt="" width="100px">
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>  
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tanggal Kejadian</label>
                        <input type="text" value="{{$item->tanggal_kejadian}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Tempat Kejadian</label>
                    <input type="text" name="tempat_kejadian" value="{{$item->tempat}}" class="form-control">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>  <form action="">
            @csrf    
        </form>    
    </div>    
</div>    
@endsection