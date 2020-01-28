<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\ModelBuku;


class masterbuku extends Controller
{
    public function index(){
        if(Auth::user()->level=="admin"){
            $data_buku=ModelBuku::get();
            return Response()->json($data_buku);
        } else {
            return Response()->json("Anda Bukan Admin");
        }
    }
}
