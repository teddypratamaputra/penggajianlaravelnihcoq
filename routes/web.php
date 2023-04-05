<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

    Route::resource('user', App\Http\Controllers\UserController::class)->middleware('auth');
    Route::resource('jabatan', App\Http\Controllers\JabatanController::class)->middleware('auth');
    Route::get('get-jabatan', [App\Http\Controllers\JabatanController::class, 'getJabatan'])->name('get.jabatan');
});
