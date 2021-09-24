@extends('templates.master')

@section('title','Histori Pengaduan')

@section('content')

<div class="row">
    @if (empty($history))
        <div class="card">
            <div class="card-body">
                <div class="alert alert-danger">
                    <h4>Belum Ada Laporan Pengaduan</h4>
                </div>    
            </div>    
        </div> 
    @else
        @foreach ($history as $no => $item)
        <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
            <div class="article-header">
                <div class="article-image" data-background="/image/{{$item->gambar}}">
                </div>
            </div>
            <div class="article-details">
                <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">{{$item->created_at}}</a></div>
                <div class="article-title">
                <h2><a href="#">Pengaduan</a></h2>
                </div>
                <p>{{$item->keterangan}}</p>
                <div class="article-user">
                <img alt="image" src="{{asset('stisla-master')}}/assets/img/avatar/avatar-1.png">
                <div class="article-user-details">
                    <div class="user-detail-name">
                    <a href="#">{{$item->nama_lengkap}}</a>
                    </div>
                    <div class="text-job">{{$item->pekerjaan}}</div>
                </div>
                </div>
            </div>
            </article>
        </div>    
        @endforeach        
    @endif
    
</div>
{{-- <hr>
@foreach ($status as $item)
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/image/{{$item->gambar}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$item->nama}}</h5>
      <p class="card-text">{{$item->keterangan}}</p>
      <a href="#" class="btn btn-primary btn-sm">Detal</a>
    </div>
</div>            
@endforeach --}}
    
@endsection