<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjaman extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id_peminjaman";
}
