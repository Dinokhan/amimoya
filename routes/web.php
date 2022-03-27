<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/service_detail', function () {
    return view('service_detail');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/case', function () {
    return view('case');
});
Route::get('/contact', function () {
    return view('contact');
});
