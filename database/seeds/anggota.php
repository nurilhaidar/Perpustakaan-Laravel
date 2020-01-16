<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ModelAnggota::insert([
            [
            'nama_anggota' => 'Kucing',
            'alamat' => 'Sidoarjo',
            'telp' => '123456789',
            ],
            [
            'nama_anggota' => 'Ayam',
            'alamat' => 'Malang',
            'telp' => '123456789',
            ],
            [
            'nama_anggota' => 'Burung',
            'alamat' => 'Surabaya',
            'telp' => '123456789',
            ],
            [
            'nama_anggota' => 'Merak',
            'alamat' => 'Bandung',
            'telp' => '123456789',
            ],
            [
            'nama_anggota' => 'Lebah',
            'alamat' => 'Bekasi',
            'telp' => '123456789',
            ],
        ]);
    }
}
