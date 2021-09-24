<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class LaporanPengaduanController extends Controller
{
    public function index(){
        $notif = DB::table('tb_pengaduan')->where('status',0)->count();
        return view('petugas.laporan.index', compact('notif'));
    }

    public function filterLaporan(Request $request){
        // dd($resuest->all());
        $dari = $request->dari;
        $sampai = $request->sampai;
        // dd($dari,$sampai);
        // $laporan = DB::table('tb_pengaduan')->whereBetween('tanggal_kejadian', [$dari,$sampai])->get();
        // $laporan = DB::table('tb_pengaduan')->whereBetween('tanggal_kejadian', [$dari,$sampai])->get();
        $laporan = DB::table('tb_pengaduan')->join('users','tb_pengaduan.user_id','=','users.id')->whereBetween('tanggal_kejadian', [$dari,$sampai])->get();
        // $laporan1 = PDF::loadView('petugas.laporan.cetakLaporan', $laporan)->setPaper('A4','potrait');;
        // return $laporan1->download('Laporan.pdf');
        // dd($laporan);
        return view('petugas.laporan.cetakLaporan', compact('laporan'));
    }
     
}
