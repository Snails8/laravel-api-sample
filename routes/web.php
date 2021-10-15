<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [TopController::class, 'index'])->name('top');

//Auth::routes();
// 概要 HRT とは


// 機能


// 導入の流れ


// 料金(プラン)


// 導入事例


// お知らせイベント
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/{newsId}', [NewsController::class, 'show'])->where('newsId', '[0-9]+')->name('news.show');
});

// もっと知りたい


// お問い合わせ
Route::prefix('contacts')->group(function () {
    Route::get('/', [ContactController::class, 'showForm'])->name('contact.index');
    Route::post('/', [ContactController::class, 'submit'])->name('contact.post');
    Route::get('/thanks', [ContactController::class, 'showThanks'])->name('contact.thanks');
});


// 無料お試し
Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'showForm'])->name('register.form');
    Route::post('/', [RegisterController::class, 'submit'])->name('register.post');
    Route::get('/thanks', [RegisterController::class, 'showThanks'])->name('register.thanks');
});

