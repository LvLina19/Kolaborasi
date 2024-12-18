<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArahController;
use Illuminate\Auth\Middleware\Authenticate;

Route::resource('arah', ArahController::class);

Route::get('/menu', [ArahController::class, 'menu'])->name('arah.menu');
Route::get('/about', [ArahController::class, 'about'])->name('arah.about');
Route::get('/', [ArahController::class, 'index'])->name('arah.index');

Auth::routes();

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/menu', [AdminController::class, 'menu'])->name('admin.menu');
    Route::get('/about', [AdminController::class, 'about'])->name('admin.about');
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
});

// Route::get('/register', function () { 
//     return view('auth.register'); 
// })->name('auth.register');

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
