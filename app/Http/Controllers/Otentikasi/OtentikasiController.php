<?php

namespace App\Http\Controllers\Otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;

class OtentikasiController extends Controller
{
    public function index(){
        return view('template_auth.login');
    }
    public function login(Request $req){
        // dd($req->all());
        // $data = User::where('username', $req->username)->firstOrFail();
        // // dd($data);
        // // dd($data->password);
        // if ($data) {
        //     if (Hash::check($req->password, $data->password)) {
        //         session(['berhasil_login' => true]);
        //         return redirect('/dashboard_user');
        //         // dd($data->role_user);
        //     }
        // return redirect()->route('/')->with('message','Username Salah');
        // }
        // else{
        //     // return redirect()->route('/')->with('message','Username Salah'); 
        //     echo 'salah';die;
        // }
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['username' => $req->username, 'password' => $req->password])){
            if(Auth::user()->role_user == 'PETUGAS'){
                session(['berhasil_login' => true]);
                return redirect('/dashboard_petugas');
            }
            else{
                session(['berhasil_login' => true]);
                return redirect('/dashboard_user');
            }        
        }
        return redirect('/')->with('login','Username Atau Password Salah');
    }

    public function registrasi(){
        return view('template_auth.registrasi');
    }

    public function regist(Request $req){
        $req->validate([
            'nama_lengkap' => 'required|alpha',
            'username' => 'required|unique:users|alpha_dash',
            'password' => 'required|same:password-confirm',
            'password-confirm' => 'required|same:password',
        ]);
        // dd($req->all());
        DB::table('users')->insert([
            'nama_lengkap' => $req->nama_lengkap,
            'username' => $req->username,
            'password' => bcrypt($req->password),
            'role_user' => 'USER',
            // 'remember_token' => '12345',
        ]);

        return redirect('/')->with('regist','Akun anda berhasil di daftarkan');
    }
}
