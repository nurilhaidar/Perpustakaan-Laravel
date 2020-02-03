<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// PETUGAS
Route::post('register', 'Petugas@register');
Route::post('login', 'Petugas@login');
Route::put('/update_petugas/{id}', 'Petugas@edit');
Route::delete('/hapus_petugas/{id}', 'Petugas@destroy');

// ANGGOTA
Route::post('register_anggota', 'Anggota@create');
Route::post('edit_anggota/{id}', 'Anggota@edit');
Route::get('tampil_anggota', 'Anggota@tampil');
Route::delete('hapus_anggota/{id}', 'Anggota@hapus');

// BUKU
Route::post('register_buku', 'Buku@create');
Route::post('edit_buku/{id}', 'Buku@edit');
Route::get('tampil_buku', 'Buku@tampil');
Route::delete('hapus_buku/{id}', 'Buku@hapus');

// PEMINJAMAN
Route::post('pinjam', 'Peminjaman@create');
Route::post('edit/{id}', 'Peminjaman@edit');
Route::delete('hapus/{id}', 'Peminjaman@hapus');
Route::get('tampil/{id}', 'Peminjaman@detail');

Route::get('buku', 'masterbuku@index')->middleware('jwt.verify');