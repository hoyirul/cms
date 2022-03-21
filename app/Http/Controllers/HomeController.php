<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        // echo "Selamat Datang";
        $user = Auth::user();
        // dd($user);
        // if($user == null){
        //     $user;
        // }else{
        //     $user = [
        //         'username' => '',
        //         'name' => '',
        //         'email' => '',
        //         'created_at' => '',
        //     ];
        // }
        return view('home', ['user' => $user]);
    }
}