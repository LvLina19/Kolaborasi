<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArahController;
use Illuminate\Auth\Middleware\Authenticate;

// Route::resource('arah', ArahController::class);

Route::get('/daftar', [ArahController::class, 'menuMakanan'])->name('arah.menuMakanan');
Route::get('/about', [ArahController::class, 'aboutMakanan'])->name('arah.aboutMakanan');
Route::get('/', [ArahController::class, 'indexMakanan'])->name('arah.indexMakanan');

Auth::routes();

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::resource('menu', MenuController::class);
    Route::get('/admin/menu', [AdminController::class, 'menu'])->name('admin.menu');
    Route::get('/admin/about', [AdminController::class, 'about'])->name('admin.about');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
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
