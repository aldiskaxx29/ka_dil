<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'tb_pengaduan';
    protected $fillable = ['gambar_id','nama','tempat','tanggal_lahir','jenis_kelamin','pekerjaan','kewarganegaraan','alamat','keterangan'];
}
