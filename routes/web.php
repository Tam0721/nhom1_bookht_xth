<?php

use App\Http\Controllers\MenuController;


use App\Http\Controllers\MailController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalendarController;

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

// Route::get('/k', function () {
//     return view('welcome');
// });
Route::view('/', function () {
    return view('home');
});

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', [CalendarController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
return view('home');
});
Route::get('lsdatphong', function () {
return view('lsdatphong');
});

// route admin
Route::get('qlphong', function () {
    return view('admin/qlphong');
});
Route::get('qldatphong', function () {
    return view('admin/qldatphong');
});
Route::get('qlthongtin', function () {
    return view('admin/qlthongtin');
});
Route::get('huyAdmin', function () {
    return view('admin/huyAdmin');
});
Route::get('huyUser', function () {
    return view('admin/huyUser');
});
// 

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/auth/google/callback', [AuthenticatedSessionController::class,'googleCallback']);
