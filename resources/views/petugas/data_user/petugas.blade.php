@extends('templates.master')

@section('title','Data Petugas')

@section('content')

<div class="card">
    <div class="card-body">
        @if (session('petugas'))   
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('petugas') }}
                </div>
            </div>            
        @endif
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalTambah"><i class="fas fa-plush"></i> Tambah Data</a>    
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    {{-- <th>Jenis Kelamin</th> --}}
                    <th>Status</th>
                    {{-- <th>action</th> --}}
                    {{-- <th>Alamat</th> --}}
                    {{-- <th>Keterngan</th>
                    <th>Gambar</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petugas as $no => $item)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$item->nama_lengkap}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->role_user}}</td>
                    <td>
                        <a href="{{url('hapusUser_petugas/' . $item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Di Hapus')"><i class="fas fa-trash"></i></a>
                        {{-- <a href="{{url('dataPengaduan/edit/' . $item->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> --}}
                        <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalEdit{{$item->id}}"><i class="fas fa-edit"></i></a>
                        <a href="{{url('detailUser_petugas/' . $item->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>    
</div>    
    
@endsection

@section('content2')
    <div class="modal fade" id="exampleModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Petugas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('inputUser_petugas') }}">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input id="nama" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                  @error('nama_lengkap')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{old('username')}}">
                  @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="row">
                  <div class="form-group col-6">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength  @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group col-6">
                    <label for="password2" class="d-block">Password Confirmation</label>
                    <input id="password2" type="password" class="form-control  @error('password-confirm') is-invalid @enderror" name="password-confirm">
                    @error('password-confirm')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Kirim
                  </button>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>    
@endsection

@section('content3')
    @foreach ($petugas as $item)
        <div class="modal fade" id="exampleModalEdit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('editUser_petugas', $item->id) }}">
                        @csrf
                        <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input id="nama" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{$item->nama_lengkap}}">
                        @error('nama_lengkap')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{$item->username}}">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="row">
                        <div class="form-group col-6">
                            <label for="password" class="d-block">Password</label>
                            <input id="password" type="password" class="form-control pwstrength  @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password">
                            <small class="text-info">Biarkan jika tidak ingin diubah</small>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="password2" class="d-block">Password Confirmation</label>
                            <input id="password2" type="password" class="form-control  @error('password-confirm') is-invalid @enderror" name="password-confirm">
                            <small class="text-info">Biarkan jika tidak ingin diubah</small>
                            @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Kirim
                        </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>        
    @endforeach
@endsection