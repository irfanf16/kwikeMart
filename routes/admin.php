<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NutritionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductNutritionController;
use App\Http\Controllers\Admin\ProductTagController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRoleController;
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

//Clear Cache facade value:
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
return '<h1>Cache facade value cleared</h1>';
});


Route::prefix("admin")->group( function (){
    Route::get('/', function () {
        return view('admin.pages.auth.login');
    });

    Route::get('/login', function () {
        return view('admin.pages.auth.login');
    })->name('admin/login');

    Route::get('/forget_password', function () {
        return view('admin.pages.auth.forget_password');
    })->name('forget_password');

    Route::get('/home', [HomeController::class,'index'])->name('admin/home');

    Route::get('/users_list', function () {
        return view('admin.pages.users.users_list');
    })->name('users_list');


    Route::prefix('users')->group(function(){
        Route::get('/', [UserController::class, "index"])->name('user.index');
        Route::get('/show/{id}', [UserController::class, "show"])->name('user.show');
        Route::get('/edit/{id}', [UserController::class, "edit"])->name('user.edit');
        Route::get('/create', [UserController::class, "create"])->name('user.create');
        Route::post('/update/{id}', [UserController::class, "update"])->name('user.update');
        Route::post('/store', [UserController::class, "store"])->name('user.store');
    });

    Route::prefix('roles')->group(function(){
        Route::get('/', [RoleController::class, "index"])->name('roles.index');
        Route::get('/create', [RoleController::class, "create"])->name('roles.create');
        Route::post('/store', [RoleController::class, "store"])->name('roles.store');
        Route::get('/edit/{id}', [RoleController::class, "edit"])->name('roles.edit');
        Route::post('/update/{id}', [RoleController::class, "update"])->name('roles.update');
        Route::post('/delete', [RoleController::class, "delete"])->name('roles.delete');
    });

    Route::prefix('user/roles')->group(function(){
        Route::get('/create', [UserRoleController::class, "create"])->name('userroles.create');
        Route::post('/store', [UserRoleController::class, "store"])->name('userroles.store');
    });

    Route::get('/change_user_status', [UserController::class, 'change_user_status'])->name('change_user_status');

    Route::prefix('drivers')->group(function(){
        Route::get('/', [DriverController::class, "index"])->name('driver.index');
        Route::get('/edit', [DriverController::class, "edit"])->name('edit_driver');
        Route::get('/orders', [DriverController::class, "show"])->name('orders_by_drivers');
        Route::post('/update/{id}', [DriverController::class, "update"])->name('driver.update');
    });

    Route::prefix('tags')->group(function (){
        Route::get('/',[TagController::class, "index"])->name('tags.index');
        Route::get('/create',[TagController::class, "create"])->name('tags.create');
        Route::get('/edit/{id}',[TagController::class, "edit"])->name('tags.edit');
        Route::post('/update/{id}',[TagController::class, "update"])->name('tags.update');
        Route::post('/destroy/{id}',[TagController::class, "destroy"])->name('tags.destroy');
        Route::post('/store',[TagController::class, "store"])->name('tags.store');
    });

    Route::prefix('category')->group(function (){
        Route::get('/', [CategoryController::class, "index"])->name('category.index');
        Route::get('/sub', [CategoryController::class, "get_sub_category"])->name('category.get');
        Route::get('/sub/sub', [CategoryController::class, "load_sub"])->name('category.load_sub');
        Route::post('/view/sub', [CategoryController::class, "view_sub"])->name('category.view_sub');
        Route::get('/change/{id}', [CategoryController::class, "change"])->name('category.change.status');
        Route::get('/create', [CategoryController::class, "create"])->name('category.create');
        Route::get('/create/sub', [CategoryController::class, "create_sub"])->name('category.create.sub');
        Route::get('/create/sub/sub', [CategoryController::class, "create_sub_sub"])->name('category.create.sub.sub');
        Route::post('/store', [CategoryController::class, "store"])->name('category.store');
        Route::post('/update/{category}', [CategoryController::class, "update"])->name('category.update');
        Route::get('/edit/{category}', [CategoryController::class, "edit"])->name('category.edit');
        Route::get('/{category}', [CategoryController::class, "show"])->name('category.show');
        Route::get('/{category}/{sub_category}', [CategoryController::class, "show_sub"])->name('category.show.sub');
    });

    Route::prefix('products')->group(function(){
        Route::get('/', [ProductController::class, "index"])->name('products');
        Route::get('/create', [ProductController::class, "create"])->name('products.create');
        Route::post('/store', [ProductController::class, "store"])->name('products.store');
        Route::post('/destroy/{id}', [ProductController::class, "destroy"])->name('products.destroy');
        Route::get('/edit', [ProductController::class, "edit"])->name('edit_products');
    });

    Route::prefix('nutritions')->group(function(){
        Route::get('/', [NutritionController::class, "index"])->name('nutritions.index');
        Route::get('/deleted', [NutritionController::class, "deleted"])->name('nutritions.deleted');
        Route::post('/restore/{id}', [NutritionController::class, "restore"])->name('nutritions.restore');
        Route::post('/delete/{id}', [NutritionController::class, "hardDelete"])->name('nutritions.hard.delete');
        Route::get('/create', [NutritionController::class, "create"])->name('nutritions.create');
        Route::post('/store', [NutritionController::class, "store"])->name('nutritions.store');
        Route::get('/edit/{id}', [NutritionController::class, "edit"])->name('nutritions.edit');
        Route::post('/update/{id}', [NutritionController::class, "update"])->name('nutritions.update');
        Route::post('/destroy/{id}', [NutritionController::class, "destroy"])->name('nutritions.destroy');
    });

    Route::prefix('products_nutrition')->group(function(){
        Route::get('/{product}', [ProductNutritionController::class, "index"])->name('nutrition.index');
        Route::post('/store', [ProductNutritionController::class, "store"])->name('nutrition.store');
        Route::post('/destroy', [ProductNutritionController::class, "destroy"])->name('nutrition.destroy');
    });

    Route::prefix('products_tag')->group(function(){
        Route::get('/{product}', [ProductTagController::class, "index"])->name('tag.index');
        Route::post('/store', [ProductTagController::class, "store"])->name('tag.store');
        Route::post('/destroy', [ProductTagController::class, "destroy"])->name('tag.destroy');
    });

    Route::prefix('retailers')->group(function(){
        Route::get('/', [StoreController::class, "index"])->name('retailers.index');
    });



    Route::get('/edit_user', function () {
        return view('admin.pages.users.edit_user');
    })->name('edit_user');

    Route::get('/view_userorderhistory', function () {
        return view('admin.pages.users.view_userorderhistory');
    })->name('view_userorderhistory');

});
