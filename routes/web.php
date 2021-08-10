<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ArtigoController;



Route::get('/', function(){
    return view('welcome');
});
