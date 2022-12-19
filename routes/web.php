<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('home');
});

Route::prefix('/admin')->group(function() {
    //店舗登録
    Route::get('/signUp', [AdminController::class, 'adminSignUpView']);
    Route::patch('/signUp', [AdminController::class, 'adminConfirm']);
    Route::post('/signUp', [AdminController::class, 'adminSignUp']);
    //店舗一覧表示
    Route::get('/view', [AdminController::class, 'adminView']);
});