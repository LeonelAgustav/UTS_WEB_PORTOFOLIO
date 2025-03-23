<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function portofolio(){
        return view('portofolio');
    }

    public function CRUD(){
        return view('crud');
    }
}
