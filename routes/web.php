<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
})->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/lsdatphong', function () {
    return view('lsdatphong');
    })->name('ls');
    Route::get('/huy-phong', [MailController::class,'sendMail'])->name('huyPhong');
}); 
// route admin
    Route::get('qlphong', function(){
        return view('admin/qlphong');
    });
    Route::get('qldatphong', function(){
        return view('admin/qldatphong');
    });
    Route::get('qlthongtin', function(){
        return view('admin/qlthongtin');
    });
    Route::get('huyAdmin', function(){
        return view('admin/huyAdmin');
    });
    Route::get('huyUser', function(){
        return view('admin/huyUser');
    });
// 

