<?php


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToaController;



use App\Http\Controllers\CosoController;

use App\Http\Controllers\MailController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TangController;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
Route::get('/', function () {
    return view('home');
});

Route::get('/', [CalendarController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/lsdatphong', function () {
    return view('lsdatphong');
    })->name('ls');
    Route::post('/huy-phong/{id}',[MailController::class,'sendMail'])->name('huyPhong');
}); 
require __DIR__.'/auth.php';

// Route::get('/', function () {
// return view('home');
// });

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

//ROUTE COSO_TOA_TANG
Route::get('ql', [AdminController::class, 'index'])->name('admin_index')->middleware(['admin','auth']);

route::prefix('admin/co_so')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('co_so');
    Route::get('/create', [CosoController::class, 'create_cs'])->name('create_cs');
    Route::post('co_so', [CosoController::class, 'store_cs'])->name('add_cs');
    Route::get('/{id}/edit', [CosoController::class, 'edit_cs'])->name('edit_cs');
    Route::post('/{id}', [CosoController::class, 'update_cs'])->name('update_cs');
    Route::delete('/{id}', [CosoController::class, 'destroy_cs'])->name('del_cs');
})->middleware(['admin','auth']);

route::prefix('admin/toa')->group(function () {
    Route::get('toa', [AdminController::class, 'index']);
    Route::get('/add', [ToaController::class, 'create_toa'])->name('create_tt');
    Route::post('toa', [ToaController::class, 'store_toa'])->name('add_tt');
    Route::get('/{id}/edit', [ToaController::class, 'edit_toa'])->name('edit_tt');
    Route::post('/{id}', [ToaController::class, 'update_toa'])->name('update_tt');
    Route::delete('/{id}', [ToaController::class, 'destroy_toa'])->name('del_tt');
})->middleware(['admin','auth']);

route::prefix('admin/co_so')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('co_so');
    Route::get('/add_tang/{id}', [TangController::class, 'create_tang'])->name('create_tang');
    Route::post('', [TangController::class, 'store_tang'])->name('add_tang');
    Route::delete('/xoa-tang/{id}', [TangController::class, 'destroy_tang'])->name('destroy_tang');
})->middleware(['admin','auth']);

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/auth/google/callback', [AuthenticatedSessionController::class,'googleCallback']);
