<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\categoryController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('category', App\Http\Controllers\categoryController::class);

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/tambah', [PenggunaController::class, 'tambah']);
Route::post('/pengguna/tambah', [PenggunaController::class, 'simpan']);
Route::get('/pengguna/edit/{user_id}', [PenggunaController::class, 'ubah']);
Route::post('/pengguna/edit/{user_id}', [PenggunaController::class, 'ubahsimpan']);
Route::get('/pengguna/hapus/{user_id}', [PenggunaController::class, 'hapus']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentikasi']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/front', [FrontController::class, 'index']);

Route::get('/setting', [SettingController::class, 'index']);
Route::get('/setting/create', [SettingController::class, 'tambah']);
Route::post('/setting/add', [SettingController::class, 'simpan']);
Route::get('/setting/hapus/{set_id}', [SettingController::class, 'hapus']);

Route::resource('post', App\Http\Controllers\postController::class);