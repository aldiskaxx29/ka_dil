@extends('templates.master')

@section('title','Data Laporan Pengaduan')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form action="{{route('filterLaporan')}}" method="POST">
                    @csrf    
                    <div class="form-group">
                        <label for="">Dari Tanggal</label>
                        <input type="date" class="form-control" name="dari">
                    </div>
                    <div class="form-group">
                        <label for="">Sampai Tanggal</label>
                        <input type="date" class="form-control" name="sampai">
                    </div>
                    <button type="submit" class="btn btn-primary" target="_blank">Submit</button>
                </form>    
            </div>
        </div>
    </div>    
</div>    
@endsection