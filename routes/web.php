<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    echo 'clear cache';
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
//    Artisan::call('db:seed');
    echo 'migrate run';
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('user/register', [UserController::class, 'store']);


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
