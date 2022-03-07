<?php

namespace App\Http\Controllers\socks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('app.about.about');
    }
}
