<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ArahController;
use Illuminate\Auth\Middleware\Authenticate;

// Route::resource('arah', ArahController::class);

Route::get('/daftar', [ArahController::class, 'menuMakanan'])->name('arah.menuMakanan');
Route::get('/list/about', [MenuController::class, 'about'])->name('menu.about');
Route::get('/', [MenuController::class, 'home'])->name('menu.home');

Auth::routes();

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('menu', MenuController::class);
    Route::get('/daftar/list', [MenuController::class, 'menus'])->name('menu.menus');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/menu', [RouteController::class, 'index'])->name('menu.index');

// Route::middleware([Authenticate::class])->group(function(){
//     Route::resource('pasien', PasienController::class);
//     Route::resource('daftar', DaftarController::class);
//     Route::resource('poli', PoliController::class);
//     Route::resource('laporan-pasien', LaporanPasienController::class);
//     Route::resource('laporan-daftar', LaporanDaftarController::class);
// });
