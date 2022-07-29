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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/manage',[\App\Http\Controllers\ManageController::class, 'index'])->name('manage');
Route::resource('/category',\App\Http\Controllers\CategoryController::class);
Route::resource('/item',\App\Http\Controllers\ItemController::class);
Route::resource('/user',\App\Http\Controllers\UserController::class);
Route::resource('/item',\App\Http\Controllers\ItemController::class);
Route::resource('/client',\App\Http\Controllers\ClientController::class);
Route::resource('/active',\App\Http\Controllers\ActiveController::class);
Route::resource('/type',\App\Http\Controllers\TypeController::class);
Route::resource('/web',\App\Http\Controllers\WebController::class);
Route::get('/web-link/{link}',[\App\Http\Controllers\ShowlinkController::class,'web'])->name('webLink');
Route::get('/youtube-link/{link}',[\App\Http\Controllers\ShowlinkController::class,'youtube'])->name('youtubeLink');
