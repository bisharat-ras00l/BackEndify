<?php

use App\Http\Controllers\CheffController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/index', [CheffController::class, 'index'])->name('cheff.home');
Route::get('/', [UserController::class,  'loginpage'])->name('cheff.login');
Route::post('/', [UserController::class,  'login']);

// Route::get('/show', [CheffController::class, 'show'])->name('show')->middleware('admin');

Route::prefix('cheff')->controller(CheffController::class)->group(function () {
    Route::get('/add', 'create')->name('cheff.add');
    Route::post('/add', 'store');
    Route::get('/show', 'show')->name('show');
    Route::get('/edit/{id}', 'edit')->name('cheff.edit');
    Route::post('/update/{id}', 'update')->name('cheff.update');
    Route::get('/delete{id}', 'destroy')->name('cheff.delete');
    Route::get('/showdash', 'showdash')->name('showdash');
});

Route::prefix('cheffuser')->controller(UserController::class)->group(function () {
    Route::get('/register', 'register')->name('cheff.register');
    Route::post('/register', 'store');
    // Route::get('/login', 'loginpage')->name('cheff.login');
    Route::post('/', 'login');
    Route::get('/logout', 'logout')->name('cheff.logout');
});


Route::prefix('menu')->controller(MenuController::class)->group(function () {
    Route::get('/add', 'create')->name('menu.add');
    Route::post('/add', 'store');
    Route::get('/show', 'show')->name('menu.show');
    Route::get('/edit/{id}', 'edit')->name('menu.edit');
    Route::post('/update/{id}', 'update')->name('menupdate');
    Route::get('/delete{id}', 'destroy')->name('menu.delete');
    Route::get('/menudash', 'menudash')->name('menudash');
});