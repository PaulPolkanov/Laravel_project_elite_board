<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
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

Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'IndexAction')->name('Home');
    Route::get('/category/{id}', "CategoryAction", function ($id){
        return $id;
    });
    Route::get('/board/{id}', "BoardAction", function ($id){
        return $id;
    });
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'IndexAction')->name('dashboard');

    Route::get('/admin/login', 'LoginAction')->name('admin_login');
    Route::post('/admin/auth', 'AuthAction');
    Route::get('/admin/logout', 'LogoutAction');

    Route::get('/admin/categories', 'CategoriesAction')->name('admin_categories');
    Route::post('/admin/add_category', 'AddCategoryAction');
    Route::post('/admin/delete_category', 'DeleteCategoryAction');
});