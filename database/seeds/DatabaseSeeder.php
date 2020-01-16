<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(anggota::class);
        $this->call(buku::class);
        $this->call(petugas::class);
        $this->call(peminjaman::class);
    }
}
