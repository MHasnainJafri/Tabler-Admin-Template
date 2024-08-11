<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::view('login','admin.auth.login');
Route::get('pages/{pageName}', function ($pageName) {
    return view('admin.pages.'.$pageName);
})->name('page');


