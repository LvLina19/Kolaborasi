<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

Route::resource('menu', MenuController::class);

Route::get('/menu', [MenuController::class, 'menu'])->name('menu.menu');
Route::get('/about', [MenuController::class, 'about'])->name('menu.about');
Route::get('/', [MenuController::class, 'index'])->name('menu.index');

Auth::routes();

Route::middleware([Authenticate::class])->group(function(){
    Route::resource('admin', AdminController::class);
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



