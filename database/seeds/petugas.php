<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ModelPetugas::insert([
            [
                'nama_petugas' => 'Sapi',
                'alamat' => 'Bojonegoro',
                'telp' => '123456789',
                'username' => 'sapi',
                'password' => '123',
            ],
            [
                'nama_petugas' => 'Semut',
                'alamat' => 'Yogyakarta',
                'telp' => '123456789',
                'username' => 'semut',
                'password' => '123',
            ],
            [
                'nama_petugas' => 'Unta',
                'alamat' => 'Purwakarta',
                'telp' => '123456789',
                'username' => 'unta',
                'password' => '123',
            ],
            [
                'nama_petugas' => 'Biawak',
                'alamat' => 'Jakarta',
                'telp' => '123456789',
                'username' => 'biawak',
                'password' => '123',
            ],
            [
                'nama_petugas' => 'Buaya',
                'alamat' => 'Malang',
                'telp' => '123456789',
                'username' => 'buaya',
                'password' => '123',
            ],
        ]);
    }
}
