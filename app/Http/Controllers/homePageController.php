<?php

namespace App\Http\Controllers;

use App\Models\profileData;
use Illuminate\Http\Request;

class homePageController extends Controller
{
    public function index(){
        $articles = profiledata::all();
        return view('homePage.homePage', compact('articles'));
    }
}
