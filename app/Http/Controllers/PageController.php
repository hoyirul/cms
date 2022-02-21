<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM : 2041720074 <br/>";
        echo "Nama : Mochammad Hairullah <br/>";
        echo "Kelas : TI-2H <br/>";
    }

    public function articles($id){
        echo "Ini merupakan halaman artikel dengan ID ". $id;
    }
}