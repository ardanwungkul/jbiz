<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NameserverController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\image;
use App\Models\Nameserver;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/portofolio', [PortofolioController::class, 'porto'])->name('portofolio');



Route::get('/contact', function () {
    return view('contactForm');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('admin')->controller(PortofolioController::class)->group(
    function () {
        Route::get('/portofolioDB', 'index')->name('portofolio.index');
        Route::post('portofolio', 'store')->name('portofolio.store');
        Route::get('portofolio/create', 'create')->name('portofolio.create');
        Route::put('portofolio/{image}', 'update')->name('portofolio.update');
        Route::delete('portofolio/{image}', 'destroy')->name('portofolio.destroy');
        Route::get('portofolioDB/{image}/edit', 'edit')->name('portofolio.edit');
    }
);

Route::middleware('admin')->controller(DomainController::class)->group(function () {
    Route::get('domain', 'index')->name('domain.index');
    Route::post('domain', 'store')->name('domain.store');
    Route::get('domain/create', 'create')->name('domain.create');
    Route::put('domain/{domain}', 'update')->name('domain.update');
    Route::delete('domain/{domain}', 'destroy')->name('domain.destroy');
    Route::get('domain/{domain}/edit', 'edit')->name('domain.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/domain/{domain}', [DomainController::class, 'show'])->name('domain.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/member', MemberController::class);
    Route::get('/', [ImageController::class, 'index'])->name('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/domain', DomainController::class);
    Route::resource('/pelanggan', PelangganController::class);
    Route::resource('/nameserver', NameserverController::class);
    Route::resource('/user', UserController::class);
    Route::post('/store', [ImageController::class, 'store'])->name('store');
    Route::delete("delete", [ImageController::class, 'delete'])->name('delete');
});


require __DIR__ . '/auth.php';
