<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\ModelAnggota;

class Anggota extends Controller
{
    public function create(Request $req){
        $validator = Validator::make($req->all(),
            [
                'nama_anggota' => 'required',
                'alamat' => 'required',
                'telp' => 'required'
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan = ModelAnggota::create([
            'nama_anggota'=>$req->nama_anggota,
            'alamat'=>$req->alamat,
            'telp'=>$req->telp,
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
                'nama_anggota'=>'required',
                'alamat'=>'required',
                'telp'=>'required'
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $edit = ModelAnggota::where('id_anggota',$id)->update([
            'nama_anggota'=>$req->nama_anggota,
            'alamat'=>$req->alamat,
            'telp'=>$req->telp
        ]);

        if($edit){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

    public function tampil(){
        $tampil = ModelAnggota::get();

        if($tampil){
            return Response()->json([$tampil]);
        } else {
            return Response()->json([$tampil->errors()]);
        }
    }

    public function hapus($id){
        $hapus = ModelAnggota::where('id_anggota',$id)->delete();

        $a = "Data Berhasil Dihapus";
        $b = "Data Gagal Dihapus";
        if($hapus){
            return Response()->json([$a]);
        } else {
            return Response()->json([$b]);
        }
    }
}
