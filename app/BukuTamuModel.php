<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuTamuModel extends Model
{
    protected $table='buku_tamu';
    protected $fillable=['id','tgl_mulai','tgl_selesai','bidang','nama_pengirim','keterangan','gambar','kebijakan','request_id'];
}
