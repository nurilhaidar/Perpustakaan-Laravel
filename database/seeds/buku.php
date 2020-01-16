<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ModelBuku::insert([
            [
                'judul' => 'Laskar Pelangi',
                'penerbit' => 'Erlangga',
                'pengarang' => 'Andrea Hirata',
                'foto' => '10290192',
            ],
            [
                'judul' => 'Sang Pemimpi',
                'penerbit' => 'Erlangga',
                'pengarang' => 'Andrea Hirata',
                'foto' => '10290192',
            ],
            [
                'judul' => 'Dilan 1990',
                'penerbit' => 'Angkasa',
                'pengarang' => 'Pidi Baiq',
                'foto' => '10290192',
            ],
            [
                'judul' => 'Dilan 1991',
                'penerbit' => 'Angkasa',
                'pengarang' => 'Pidi Baiq',
                'foto' => '10290192',
            ],
            [
                'judul' => 'Buku PPKn',
                'penerbit' => 'Erlangga',
                'pengarang' => 'Kemendikbud',
                'foto' => '10290192',
            ]
        ]);
    }
}
