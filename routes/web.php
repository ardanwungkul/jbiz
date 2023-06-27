<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NameserverController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendEmailController;
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
Route::get('/contact', [SendEmailController::class, 'index'])->name('contact');
Route::post('/contact/send', [SendEmailController::class, 'send'])->name('contact.send');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('dashboard.users');
Route::get('/dashboard/pelanggans', [DashboardController::class, 'pelanggans'])->name('dashboard.pelanggans');
Route::get('/dashboard/domains', [DashboardController::class, 'domains'])->name('dashboard.domains');

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

Route::middleware('admin')->controller(PelangganController::class)->group(function () {
    Route::get('pelanggan', 'index')->name('pelanggan.index');
    Route::post('pelanggan', 'store')->name('pelanggan.store');
    Route::post('pelangganDomain', 'store2')->name('pelanggan.store2');
    Route::get('pelanggan/create', 'create')->name('pelanggan.create');
    Route::get('pelanggan/{pelanggan}', 'show')->name('pelanggan.show');
    Route::delete('pelanggan/{pelanggan}', 'destroy')->name('pelanggan.destroy');
    Route::get('pelanggan/{pelanggan}/edit', 'edit')->name('pelanggan.edit');
});

Route::middleware('auth')->group(function () {

    Route::get('/domain/{slug}', [DomainController::class, 'show'])->name('domain.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [ImageController::class, 'index'])->name('welcome');
    Route::put('pelanggan/{pelanggan}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::resource('/member', MemberController::class);
    // Route::resource('/pelanggan', PelangganController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Route::resource('/domain', DomainController::class);
    Route::post('nameserverDomain', [NameserverController::class, 'store2'])->name('nameserver.store2');
    Route::post('addUser', [UserController::class, 'store2'])->name('user.store2');
    Route::resource('/nameserver', NameserverController::class);
    Route::resource('/user', UserController::class);
    Route::post('/store', [ImageController::class, 'store'])->name('store');
    Route::delete("delete", [ImageController::class, 'delete'])->name('delete');
    Route::get('/searchPelanggan', [DomainController::class, 'searchPelanggan'])->name('domain.searchPelanggan');
});


require __DIR__ . '/auth.php';
