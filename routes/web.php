<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'homePageController@index');
Route::get('/portofolio', 'portofolioController@index');