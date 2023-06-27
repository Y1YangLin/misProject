<?php

use App\Http\Controllers\PagesController;
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

/* 為了不要讓route直接回傳view，改成使用controller 的方法

以下是兩種laravel建議的編寫方式 :
Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products. 'App\Http\Controller\');

提醒 : Route 可以回傳 String arrays json function ...
*/

// Route thats sends back the view

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [PagesController::class, 'index']);
// Route::get('/Jable', [PagesController::class, 'about']);




