<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBuku;
use Validator;

class Buku extends Controller
{
    public function create(Request $req){
        $validator = Validator::make($req->all(),
            [
                'judul' => 'required',
                'penerbit' => 'required',
                'pengarang' => 'required',
                'foto' => 'required'
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan = ModelBuku::create([
            'judul'=>$req->judul,
            'penerbit'=>$req->penerbit,
            'pengarang'=>$req->pengarang,
            'foto'=>$req->foto,
        ]);

        if($simpan){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

    public function edit($id,Request $req){
        $validator = Validator::make($req->all(),
            [
                'judul'=>'required',
                'penerbit'=>'required',
                'pengarang'=>'required',
                'foto'=>'required',
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $edit = ModelBuku::where('id_buku',$id)->update([
            'judul'=>$req->judul,
            'penerbit'=>$req->penerbit,
            'pengarang'=>$req->pengarang,
            'foto'=>$req->foto
        ]);

        if($edit){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

    public function tampil(){
        $tampil = ModelBuku::get();

        if($tampil){
            return Response()->json([$tampil]);
        } else {
            return Response()->json([$tampil->errors()]);
        }
    }

    public function hapus($id){
        $hapus = ModelBuku::where('id_buku',$id)->delete();

        $a = "Data Berhasil Dihapus";
        $b = "Data Gagal Dihapus";
        if($hapus){
            return Response()->json([$a]);
        } else {
            return Response()->json([$b]);
        }
    }
}

