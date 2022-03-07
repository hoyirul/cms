<?php

namespace App\Http\Controllers\socks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('app.contact.contact');
    }
}
