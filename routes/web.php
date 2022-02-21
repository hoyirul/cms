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

// Route::get('/', function () {
//     return view('welcome');
// });


/* Praktikum 01 */
Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "NIM : 2041720074 <br/>";
    echo "Nama : Mochammad Hairullah <br/>";
    echo "Kelas : TI-2H <br/>";
});

Route::get('/articles/{id}', function ($id) {
    echo "Ini merupakan halaman artikel dengan ID ". $id;
});
