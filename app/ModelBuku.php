<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    protected $table = "buku";
    protected $primaryKey = "id_buku";

    protected $fillable = [
        'judul',
        'penerbit',
        'pengarang',
        'foto',
    ];
    
}
