<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPetugas extends Model
{
    protected $table = "petugas";
    protected $primaryKey = "id_petugas";
    protected $fillable = 
    ['nama_petugas', 
    'alamat',
    'telp',
    'username',
    'password',
    'level',
    ];

}
