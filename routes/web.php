<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/keto', function(){
    return view('post');
});

Route::get('/post/firstpost', function(){
    return view('firstpost');
});

Route::get('/post/{id}', function(string $id){
    return "<h1>This is values ". $id."  </h1>";
});

Route::get('/{id}', function($if){
    return "<p>This is new line of values ". $if ." </p>";
});