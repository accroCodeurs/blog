<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        return view('index');
    }

    public function blog(){
        return view('blog');
    }

    public function galerie(){
        return view('galerie');
    }
}
