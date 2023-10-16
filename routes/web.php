<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function(){
    echo "NIM : 2321770004<br>";
    echo "Nama : Affansyah Hanan Windharto";
});

Route::get('/articles/{id}', function($id) {
    return "Halaman Artikel dengan ID " . $id;
});
