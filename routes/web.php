<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ArahController;
use Illuminate\Auth\Middleware\Authenticate;

// Route::resource('arah', ArahController::class);

Route::get('/daftar', [ArahController::class, 'menuMakanan'])->name('arah.menuMakanan');
Route::get('/about', [ArahController::class, 'aboutMakanan'])->name('arah.aboutMakanan');
Route::get('/', [ArahController::class, 'indexMakanan'])->name('arah.indexMakanan');

Auth::routes();

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('menu', MenuController::class);
    Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/menu/menu', [MenuController::class, 'menus'])->name('menu.menus');
    Route::get('/menu/about', [MenuController::class, 'about'])->name('menu.about');
    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
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
