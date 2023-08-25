<?php

use App\Http\Controllers\FaceCategoryController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LikeyController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

/*Pages --> 主頁等一般頁面*/
Route::get('/', [PagesController::class, 'index']);
Route::get('/index', [PagesController::class, 'index'])->name('index');
Route::post('/question', [PagesController::class, 'question']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [PagesController::class, 'showcontactform']);


/*Users --> 與Users相關*/
Route::post('/user/editUserPassword', [UsersController::class, 'editUserPassword'])->name('editPassword');
Route::post('/user/editUserProfile', [UsersController::class, 'editUserProfile'])->name('editProfile');


/* Products*/
Route::get('/product', [ProductsController::class, 'show_Product_page']);
Route::get('/product-detail/{name}/{id}', [ProductsController::class, 'show_Product_Detail']);

/**Like */
Route::post('/pressLike', [LikeyController::class, 'getUserLikeRequest']);

/**FaceCategory */
Route::get('/facetype', [FaceCategoryController::class, 'index']);
Route::get('/facetype/photo', [FaceCategoryController::class, 'photo']);
Route::post('/facetype/analysis',[FaceCategoryController::class, 'analysis']);


/**Google Socialite */
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle'])->name('callbackGoogle');



