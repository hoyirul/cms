<?php

namespace App\Http\Controllers\socks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ClientController extends Controller
{
    public function index(){
        $product = Product::all();

        return view('app.client.clients', compact('product'));
    }
}
