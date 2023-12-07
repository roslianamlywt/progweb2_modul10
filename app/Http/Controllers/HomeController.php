<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        //sesuaikan dengan nama anda
        return view('home', ['nama_pengguna'=>'N Rosliana Mulyawati']);
    }
    public function child(){
        return view('child');
    }
}
