<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClientController;
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
#Socialzone
Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'IndexAction')->name('Home');
    Route::get('/category/{id}', "CategoryAction", function ($id){
        return $id;
    });
    Route::get('/board/{id}', "BoardAction", function ($id){
        return $id;
    });
});

#End social zone

#Client's zone
Route::controller(ClientController::class)->group(function(){

});

#Client's zone