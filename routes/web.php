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
use App\Http\Controllers\socks\AboutController as SocksAboutController;
use App\Http\Controllers\socks\ClientController;
use App\Http\Controllers\socks\ContactController;
use App\Http\Controllers\socks\HomeController as SocksHomeController;
use App\Http\Controllers\socks\TestmonialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/', [FiturHomeController::class, 'index']);

// Products
// Route::prefix('/products')->group(function(){
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/detail/{id}', [ProductController::class, 'detail']);
// });

// // News
// Route::controller(NewsController::class)->group(function(){
//     Route::get('/news', 'index');
//     Route::get('/news/detail/{slug}', 'detail');
// });

// // Program
// Route::controller(ProgramController::class)->group(function(){
//     Route::get('/program/karir', 'karir');
//     Route::get('/program/magang', 'magang');
//     Route::get('/program/kunjungan-industri', 'industri');
// });

// Route::get('/about', [FiturAboutController::class, 'index'])->name('about');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [SocksHomeController::class, 'index']);

Route::prefix('/')->group(function(){
    Route::get('/home', [SocksHomeController::class, 'index']);
    Route::get('/about', [SocksAboutController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/client', [ClientController::class, 'index']);
    Route::get('/testmonial', [TestmonialController::class, 'index']);
});
