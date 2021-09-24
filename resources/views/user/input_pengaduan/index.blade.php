@extends('templates.master')

@section('title','Input Laporan')

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

        <form action="{{route('inputPengaduanForm')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{$nama->nama_lengkap}}" readonly>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tempat</label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror" value="{{old('tempat')}}" name="tempat">
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
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{old('tanggal_lahir')}}" name="tanggal_lahir">
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
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki - laki">
                            <label class="form-check-label" for="jenis_kelamin1">
                                Laki - laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
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
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{old('pekerjaan')}}" name="pekerjaan">
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
                        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" value="{{old('kewarganegaraan')}}" name="kewarganegaraan">
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
                <textarea name="alamat" id="" class="form-control @error('alamat') is-invalid @enderror" cols="30" rows="10"></textarea>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Keterangan Laporan</label>
                <textarea name="keterangan" id="" class="form-control @error('keterangan') is-invalid @enderror" cols="30" rows="10"></textarea>
                @error('keterangan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tanggal Kejadian</label>
                        <input type="date" name="tanggal_kejadian" class="form-control" @error('tanggal_kejadian') is-invalid @enderror value="{{old('tanggal_kejadian')}}">
                        @error('tanggal_kejadian')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tempat_kejadian">Tempat Kejadian</label>
                        <textarea name="tempat_kejadian" id="" class="form-control @error('tempat_kejadian') is-invalid @enderror" cols="30" rows="10"></textarea>
                        @error('tempat_kejadian')
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
                        <label for="gambar">Upload Bukti Pengaduan</label>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gambar2">Upload Bukti Pengaduan</label>
                        <input type="file" class="form-control" name="gambar2" id="gambar">
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gambar3">Upload Bukti Pengaduan</label>
                        <input type="file" class="form-control" name="gambar3" id="gambar">
                    </div>  
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>        
    </div>    
</div>    
@endsection