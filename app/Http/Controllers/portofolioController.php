<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portofolioController extends Controller
{
    public function index(){
        return view('portofolioPage.portofolio');
    }
}
