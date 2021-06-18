<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Admin\ViewAdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Kasir\ViewKasirController;
use App\Http\Controllers\Owner\ViewOwnerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['web', 'auth', 'role:admin'])->group(function () {
Route::get('/admin/dashboard', [ViewAdminController::class, 'dashboard'])->name('dashboard.admin');
Route::get('/admin/outlet', [ViewAdminController::class, 'outlet'])->name('outlet.admin');
Route::get('/admin/paket', [ViewAdminController::class, 'paket'])->name('paket.admin');
Route::get('/admin/member/index', [MemberController::class, 'index'])->name('member.index');
Route::get('/admin/member/createmember', [MemberController::class,'createmember']);
Route::post('/admin/member/store', [MemberController::class,'store'])->name('member.store');
Route::get('/admin/member/edit/{id}', [MemberController::class,'edit'])->name('member.edit');
Route::put('/admin/member/update/{id}', [MemberController::class,'update'])->name('member.update');
Route::get('/admin/member/hapus/{id}', [MemberController::class,'hapus'])->name('member.hapus');
});
Route::middleware(['web', 'auth', 'role:kasir'])->group(function () {
    Route::get('/kasir/dashboard', [ViewKasirController::class, 'index'])->name('index.kasir');
});
Route::middleware(['web', 'auth', 'role:owner'])->group(function () {
    Route::get('/owner/dashboard', [ViewOwnerController::class, 'index'])->name('index.owner');
});


