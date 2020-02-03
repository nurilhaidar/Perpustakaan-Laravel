<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjaman extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id_peminjaman";
    public $timestamps = false;

    protected $fillable = [
        'tgl',
        'id_anggota',
        'id_petugas',
        'deadline',
        'denda',
    ];
}

