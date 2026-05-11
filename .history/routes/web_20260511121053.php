<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth','permission:manage-users'])->group(function () {

    Route::resource('users', UserController::class);

});
Route::middleware(['auth', 'permission:assign-roles'])->group(function () {

    Route::resource('users', UserController::class);

    Route::get('roles', [\App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [\App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
    Route::post('roles', [\App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{id}/edit', [\App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{id}/update', [\App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');

});
Route::middleware(['permission:manage-rooms'])->group(function () {

        Route::resource('rooms', RoomController::class);

    });

 Route::middleware([
        'permission:create-bookings'
    ])->group(function () {

        Route::resource('bookings', BookingController::class);

    });



require __DIR__.'/auth.php';
