<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAnggota;
use App\ModelBuku;
use App\ModelPeminjaman;
use App\ModelDetailBuku;
use Validator;

class Peminjaman extends Controller
{
    public function create(Request $req){
        $validator = Validator::make($req->all(),[
            'id_anggota' => 'required',
            'id_petugas' => 'required',
            'deadline' => 'required',
            'denda' => 'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan = ModelPeminjaman::create([
            'tgl'=>date('Y-m-d H:i:s'),
            'id_anggota'=>$req->id_anggota,
            'id_petugas'=>$req->id_petugas,
            'deadline'=>$req->deadline,
            'denda'=>$req->denda,
        ]);

        $a = "berhasil";
        $b = "tidak berhasil";

        if($simpan){
            return Response()->json($a);
        } else {
            return Response()->json($b);
        }
    }

    public function edit(Request $req, $id){
        $validator = Validator::make($req -> all(),[
            'id_anggota' => 'required',
            'id_petugas' => 'required',
            'tgl' => 'required',
            'deadline' => 'required',
            'denda' => 'required',
        ]);

        if($validator -> fails()){
            return Response()->json($validator->errors());
        }

        $edit = ModelPeminjaman::where('id_peminjaman', $id)->update([
            'id_anggota'=>$req->id_anggota,
            'id_petugas'=>$req->id_petugas,
            'tgl'=>$req->tgl,
            'deadline'=>$req->deadline,
        ]);

        $a = "GAGAL :(";

        if($edit){
            return Response()->json([$edit]);
        } else {
            return Response()->json([$a]);
        }
    }

    public function hapus($id){
        $hapus = ModelPeminjaman::where('id_peminjaman',$id)->delete();

        $a = "Berhasil menghapus data";
        $b = "Gagal menghapus data";

        if($hapus){
            return Response()->json([$a]);
        } else {
            return Response()->json([$b]);
        }
    }

    public function detail($id){
        $tampil = ModelPeminjaman::join('anggota', 'anggota.id_anggota', 'peminjaman.id_anggota')->
        where('id_peminjaman', $id)->first();

        $buku = ModelDetailBuku::where('id_pinjam',$id)->get();

        $dt['data']['id_anggota']=$tampil->id_anggota;
        $dt['data']['nama_anggota']=$tampil->nama_anggota;
        $dt['data']['id_petugas']=$tampil->id_petugas;
        $dt['data']['tanggal_pinjam']=$tampil->tgl;
        $dt['data']['tanggal_kembali']=$tampil->deadline;
        $dt['data']['data_buku']=$buku;
        return Response()->json([$dt]);
    }
}
