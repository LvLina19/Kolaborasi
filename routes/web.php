<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ArahController;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\KomenController;
use Illuminate\Auth\Middleware\Authenticate;

// Route::resource('arah', ArahController::class);

Route::get('/daftar', [ArahController::class, 'menuMakanan'])->name('arah.menuMakanan');
Route::get('/list/about', [MenuController::class, 'about'])->name('menu.about');
Route::get('/', [MenuController::class, 'home'])->name('menu.home');

Auth::routes();

Route::resource('komen', KomenController::class);
Route::resource('judul', JudulController::class);

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('menu', MenuController::class);
    Route::get('/daftar/list', [MenuController::class, 'menus'])->name('menu.menus');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
