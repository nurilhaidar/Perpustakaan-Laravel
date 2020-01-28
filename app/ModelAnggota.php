<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAnggota extends Model
{
    protected $table = "anggota";
    protected $primaryKey = "id_anggota";

    protected $fillable = [
        'nama_anggota',
        'alamat',
        'telp'
    ];
}
