<?php

namespace App\Http\Controllers\socks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testmonial;

class TestmonialController extends Controller
{
    public function index(){
        $testmonial = Testmonial::all();
        
        return view('app.testmonial.testmonial', compact('testmonial'));
    }
}
