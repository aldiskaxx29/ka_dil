@extends('templates.master')

@section('title','Data Pengaduan')

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
        {{-- <a href="" class="btn btn-primary"><i class="fas fa-plush"></i> Tambah Data</a>     --}}
        <hr>
        <table class="table" id="myTable">
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $no => $item)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$item->nama_lengkap}}</td>
                    <td>{{$item->tanggal_lahir}}</td>
                    {{-- <td>{{$item->jenis_kelamin}}</td> --}}
                    <td>{{$item->kewarganegaraan}}</td>
                    <td>
                        @if ($item->status == 0)
                            <small class="badge badge-warning">Pending</small>    
                        @elseif($item->status == 1)
                            <small class="badge badge-success">Success</small>                        
                        @elseif($item->status == 2)
                            <small class="badge badge-danger">Gagal</small>                          
                        @endif
                    </td>
                    <td>Sepatan</td>
                    <td>
                        {{-- <a href="{{url('dataPengaduan/hapus/' . $item->id_pengaduan)}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Di Hapus')"><i class="fas fa-trash"></i></a> --}}
                        {{-- <a href="{{url('dataPengaduan/edit/' . $item->id_pengaduan)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> --}}
                        <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalTerima{{$item->id_pengaduan}}">Terima</a>
                        <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalTolak{{$item->id_pengaduan}}">Tolak</a>
                        <a href="{{url('dataPengaduan/detail/' . $item->id_pengaduan)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>    
</div>    
  
@endsection

@section('content2')
    {{-- @foreach ($pengaduan as $i)
    <div class="modal fade" id="exampleModalAcc{{$i->id_pengaduan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal Acc Pengaduan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{url('dataPengaduan/acc', $i->id_pengaduan)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Pengaduan</label>
                <select name="status" id="" class="form-control">
                <option value="">-- Pilhan --</option>
                <option value="1">Terima</option>
                <option value="2">Tolak</option>
                </select>
            </div>
            <div class="float-right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>    
    @endforeach   --}}

{{-- modal Terima --}} 
  <!-- Modal -->
  @foreach ($pengaduan as $item)
  <div class="modal fade" id="exampleModalTerima{{$item->id_pengaduan}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('dataPengaduan/terima', $item->id_pengaduan)}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="status" value="1">
                    <input type="text" class="form-control btn btn-success" value="Yakin ingin di Terima" placeholder="Terima">
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>      
  @endforeach


{{-- modal Tolak --}} 
  <!-- Modal -->
  @foreach ($pengaduan as $item)
  <div class="modal fade" id="exampleModalTolak{{$item->id_pengaduan}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('dataPengaduan/tolak', $item->id_pengaduan)}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="status" value="2">
                    <input type="text" class="form-control btn btn-warning" value="Yakin ingin di tolak" placeholder="Terima">
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>      
  @endforeach

@endsection



