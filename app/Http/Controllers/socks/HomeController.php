<?php

namespace App\Http\Controllers\socks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Testmonial;

class HomeController extends Controller
{
    public function index(){
        $product = Product::all();
        $testmonial = Testmonial::all();
        return view('app.home.index', compact('product', 'testmonial'));
    }
}
