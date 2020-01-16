<?php

use Illuminate\Database\Seeder;

class peminjaman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ModelPeminjaman::insert([
            [
                'tgl' => '2019-05-05',
                'id_anggota' => '1',
                'id_petugas' => '1',
                'deadline' => '2019-06-05',
                'denda' => '0',
            ],
            [
                'tgl' => '2019-06-05',
                'id_anggota' => '2',
                'id_petugas' => '3',
                'deadline' => '2019-09-05',
                'denda' => '2000',
            ],
            [
                'tgl' => '2019-02-05',
                'id_anggota' => '3',
                'id_petugas' => '1',
                'deadline' => '2019-06-05',
                'denda' => '0',
            ],
            [
                'tgl' => '2019-09-05',
                'id_anggota' => '4',
                'id_petugas' => '2',
                'deadline' => '2019-06-05',
                'denda' => '0',
            ],
            [
                'tgl' => '2019-05-05',
                'id_anggota' => '5',
                'id_petugas' => '1',
                'deadline' => '2019-06-05',
                'denda' => '0',
            ]
        ]);
    }
}
