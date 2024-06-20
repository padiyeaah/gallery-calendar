<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/search', function () {
    return view('user.search');
});
Route::get('/momenku', function () {
    return view('user.momenku');
});
Route::get('/tagar', function () {
    return view('user.tagar');
});
