<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\fitur\AboutController as FiturAboutController;
use App\Http\Controllers\fitur\HomeController as FiturHomeController;
use App\Http\Controllers\fitur\NewsController;
use App\Http\Controllers\fitur\ProductController;
use App\Http\Controllers\fitur\ProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM : 2041720074 <br/>";
//     echo "Nama : Mochammad Hairullah <br/>";
//     echo "Kelas : TI-2H <br/>";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Ini merupakan halaman artikel dengan ID ". $id;
// });

/* Praktikum 02 - Bagian 1 */
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

/* Praktikum 02 - Bagian 2 */
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/articles/{id}', [ArticleController::class, 'index']);

/* PRAKTIKUM 3 */

// Home
Route::get('/', [FiturHomeController::class, 'index']);

// Products
Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index');
    Route::get('/products/detail/{id}', 'detail');
});

// News
Route::controller(NewsController::class)->group(function(){
    Route::get('/news', 'index');
    Route::get('/news/detail/{slug}', 'detail');
});

// Program
Route::controller(ProgramController::class)->group(function(){
    Route::get('/program/karir', 'karir');
    Route::get('/program/magang', 'magang');
    Route::get('/program/kunjungan-industri', 'industri');
});

Route::get('/about', [FiturAboutController::class, 'index']);