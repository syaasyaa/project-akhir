<?php

use App\Http\Controllers\pengirimcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});
Route::resource('pengirim', pengirimcontroller::class);
