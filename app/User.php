<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_lengkap', 'username', 'password','role_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function isPetugas(){
    //     if($this->role_user == 'PETUGAS'){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    // public function isUser(){
    //     if($this->role_user == 'USER'){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
}
