<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;

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

// Route::resource('contacts', ContactFormController::class);　ルートリソース


// Route::get('/contacts', [ContactFormController::class, 'index'])->name('contacts.index');　
// 一行で書くとこうなる
// nameをつけるとルート情報に名前をつける事ができる　例：viewでリンクを貼る際などに便利


// ルートのグループ化 
// prefixは先頭に指定した文字列をつける事ができる
// middlewareは認証->
// controllerはcontrollerの指定->
// nameはルートの名前->
// groupはグループ化->

Route::prefix('contacts')
->middleware(['auth']) //認証しないとcontactsに入れないようにする
->controller(ContactFormController::class)
->name('contacts.')
->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    
});



Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('tests/test', [TestController::class, 'index']);

require __DIR__.'/auth.php';
