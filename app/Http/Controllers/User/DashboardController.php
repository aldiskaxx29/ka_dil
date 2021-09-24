<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon\Carbon;

class DashboardController extends Controller
{
    
    // public function __construct(){
    //     ini_set('max_execution_time', 1800);
    // }

    /**
     * Display a listing
     *  of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dashboard');
    }


    public function download($id){     
        // $data = public_path('image\Lambang_Polri.png');
        // dd($data);
        // $today = Carbon::now()->isoFormat('dddd');
        // echo $today;die;
        // return view('user.download_laporan');
        // $laporan = PDF::loadView('user.download_laporan', $data);

        $today =  Carbon::now()->isoFormat('dddd');
        $data = DB::table('tb_pengaduan')->join('users','tb_pengaduan.user_id','=','users.id')->where('id_pengaduan', $id)->first();
        // dd($user);
        $laporan = PDF::loadView('user.download_laporan', compact('data','today'))->setPaper('Legal','potrait');
        // return view('user.download_laporan');
        return $laporan->download('Laporan.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
