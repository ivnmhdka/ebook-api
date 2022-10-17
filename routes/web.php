<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// RETURN STRING
Route::get('coba', function () {
    return 'Hello world!';
});

// array
Route::get('coba1', function () {
    return ['lisa, rose, jennie, jisoo'];
});

// json obek
Route::get('coba2', function () {
    return [
        'Nama' => 'Ivan Mahadika',
        'Kelas' => 'XII RPL 4',
        'NIS' => 3103120114
    ];
});

// objek json, ubah status code
Route::get('coba3', function () {
    return response()->json(
        [
            'Nama' => 'Ivan Mahadika',
            'Kelas' => 'XII RPL 4',
            'NIS' => 3103120114
        ],
        201
    );
});
