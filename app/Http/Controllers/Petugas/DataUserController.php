<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notif = DB::table('tb_pengaduan')->where('status',0)->count();
        return view('petugas.data_user.index', compact('notif'));
    }

    public function petugas(){
        // $user = Auth::user()->username;
        $petugas = DB::table('users')->where('role_user','PETUGAS')->get();
        // dd($petugas);
        return view('petugas.data_user.petugas', compact('petugas'));
    }

    public function inputPetugas(Request $request){
        // dd($request->all());
        $request->validate([
            'nama_lengkap' => 'required',
            'username'  => 'required|unique:users',
            'password' => 'required|same:password-confirm',
            'password-confirm' => 'required|same:password'
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role_user' => 'PETUGAS'
        ]);
        return redirect()->route('dataUser_petugas')->with('petugas','Data Petugas Berhasil Di Tambahakan');
    }

    public function detail($id){
        $item = DB::table('users')->where('id', $id)->first();
        // $item = DB::table('tb_pengaduan')->join('users','users.id','=','tb_pengaduan.user_id')->where('id_pengaduan',$id)->first();
        // dd($item);
        return view('petugas.data_user.detail_petugas', compact('item'));
    }

    public function editPetugas(Request $request, $id){
        DB::table('users')->where('id', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('dataUser_petugas')->with('petugas','Data Petugas berhasil Di Ubah');
        // $petugas_id = DB::table('users')->where('id', $id)->first();
        // return view('petugas.data_user.petugas', compact('petugas_id'));
    }

    public function hapusPetugas($id){
        // dd($id);
        DB::table('users')->delete($id,'id');
        return redirect()->route('dataUser_petugas')->with('petugas','Data Petugas Berhasil Di Hapus');
    }





    //User user
    public function user(){
        $user = DB::table('users')->where('role_user','USER')->get();
        return view('petugas.data_user.user', compact('user'));
    }

    // public function inputUser(Request $request){
    //     $request->validate([
    //         'nama_lengkap' => 'requried',
    //         'username' => 'required|unique:users',
    //         'password' => ''
    //     ]);
    // }

    // public function editUser(){

    // }

    // public function hapusUser(){

    // }

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
