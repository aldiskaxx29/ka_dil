<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">{{Auth::user()->role_user}}</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
        <ul class="sidebar-menu">
          @if (Auth::user()->role_user == 'USER')
            <li class="menu-header">Dashboard User</li>
            <li><a class="nav-link" href="{{route('dashboard.user')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Starter</li>
            <li><a class="nav-link" href="{{route('inputPengaduan.user')}}"><i class="far fa-square"></i> <span>Input Pengaduan</span></a></li>
            <li><a class="nav-link" href="{{route('status_Pengaduan.user')}}"><i class="fas fa-pencil-ruler"></i> <span>Status Pengaduan</span></a></li>
            
          @elseif(Auth::user()->role_user == 'PETUGAS')
            <li class="menu-header">Dashboard Petugas</li>
            <li><a class="nav-link" href="dashboard_petugas"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Starter</li>

            <li>
              @if ($notif)
                <a class="nav-link" href="{{route('dataPengaduan')}}"><i class="far fa-square"></i> <span>Data Pengaduan <sup style="background: red;border-radius:50%;padding:3px 5px 3px 5px;font-size:8px;color:white;">{{$notif}}</sup> </span></a>  
              @else
              <a class="nav-link" href="{{route('dataPengaduan')}}"><i class="far fa-square"></i> <span>Data Pengaduan</span></a>
              @endif
            </li>

            <li><a class="nav-link" href="{{url('dataUser')}}"><i class="fas fa-pencil-ruler"></i> <span>Data User</span></a></li>
            <li><a class="nav-link" href={{url('laporan_pengaduan')}}><i class="fas fa-pencil-ruler"></i> <span>Data Laporan</span></a></li>
          @endif
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="{{url('/logout')}}" class="btn btn-lg btn-block btn-icon-split" style="background: yellow;">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
    </aside>
  </div>