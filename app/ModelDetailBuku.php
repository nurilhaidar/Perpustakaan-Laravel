<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDetailBuku extends Model
{
    protected $table = 'detail_peminjaman';
    protected $primarykey = 'id_detail';

    protected $fillable = [
        'id_pinjam',
        'id_buku',
    ];
}
