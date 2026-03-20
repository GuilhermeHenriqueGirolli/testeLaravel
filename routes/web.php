<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/testerotas/{nome?}', function($nome = null) {
    return view('testerotas', ['nome' => $nome]);
});

Route::fallback(function () {
    return "Erro!";
});