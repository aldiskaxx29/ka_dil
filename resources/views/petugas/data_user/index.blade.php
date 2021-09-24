@extends('templates.master')

@section('title','Data User')

@section('content')

<div class="row">
    <div class="col-12 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="empty-state" data-height="300">
            <div class="empty-state-icon">
              <i class="fas fa-user-tie"></i>
            </div>
            <a href="dataUser_petugas"><h2>Data Petugas</h2></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="empty-state" data-height="300">
            <div class="empty-state-icon bg-danger">
              <i class="fas fa-address-card"></i>
            </div>
            <a href="dataUser_user"><h2>Data Masyarakat</h2></a>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection