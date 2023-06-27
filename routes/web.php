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

// Route thats sends back the view

Route::get('/', function () {
    return view('welcome');
});


// Route 可以回傳 String arrays json function ...

/* 為了不要讓route直接回傳view，改成使用controller 的方法
Route::get('/products', [ProductsController::class, 'index']);

*/