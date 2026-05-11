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
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','permission:manage-users'])->group(function () {

    // Route::resource('users', UserController::class);
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{id}/update', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('users/{id}/delete', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

});

Route::middleware(['auth', 'permission:manage-rooms'])->group(function () {

    Route::get('rooms', [\App\Http\Controllers\RoomController::class, 'index'])->name('rooms.index');
    Route::get('rooms/create', [\App\Http\Controllers\RoomController::class, 'create'])->name('rooms.create');
    Route::post('rooms', [\App\Http\Controllers\RoomController::class, 'store'])->name('rooms.store');

    Route::get('rooms/{id}/edit', [\App\Http\Controllers\RoomController::class, 'edit'])->name('rooms.edit');
    Route::put('rooms/{id}/update', [\App\Http\Controllers\RoomController::class, 'update'])->name('rooms.update');

    Route::delete('rooms/{id}/delete', [\App\Http\Controllers\RoomController::class, 'destroy'])->name('rooms.destroy');

});
Route::middleware(['auth', 'permission:assign-roles'])->group(function () {



    Route::get('roles', [\App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [\App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
    Route::post('roles', [\App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{id}/edit', [\App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{id}/update', [\App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');

});


 Route::middleware(['auth','permission:create-booking'])->group(function () {

    Route::get('bookings', [\App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');
    Route::get('bookings/create', [\App\Http\Controllers\BookingController::class, 'create'])->name('bookings.create');
    Route::post('bookings', [\App\Http\Controllers\BookingController::class, 'store'])->name('bookings.store');

    Route::get('bookings/{id}/edit', [\App\Http\Controllers\BookingController::class, 'edit'])->name('bookings.edit');
    Route::put('bookings/{id}/update', [\App\Http\Controllers\BookingController::class, 'update'])->name('bookings.update');

    

});
 Route::middleware(['auth','permission:cansel-booking'])->group(function () {

    Route::delete('bookings/{id}/delete', [\App\Http\Controllers\BookingController::class, 'destroy'])->name('bookings.destroy');

 });



require __DIR__.'/auth.php';
