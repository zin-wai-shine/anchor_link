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


Auth::routes(['verify' => true]);
Route::middleware(['auth','verified'])->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware('isAuthor')->group(function (){
        Route::resource('/user',\App\Http\Controllers\UserController::class)->middleware('isAdmin');
        Route::get('/manage',[\App\Http\Controllers\ManageController::class, 'index'])->name('manage');
        Route::resource('/category',\App\Http\Controllers\CategoryController::class);
        Route::resource('/item',\App\Http\Controllers\ItemController::class);
        Route::resource('/item',\App\Http\Controllers\ItemController::class);
        Route::resource('/client',\App\Http\Controllers\ClientController::class);
        Route::resource('/active',\App\Http\Controllers\ActiveController::class);
        Route::resource('/type',\App\Http\Controllers\TypeController::class);
        Route::resource('/web',\App\Http\Controllers\WebController::class);
    });

    Route::put('/profile/{id}',[\App\Http\Controllers\ProfileController::class,'update'])->name('profile.update');

    Route::get('/web-link/{slug}',[\App\Http\Controllers\ShowlinkController::class,'web'])->name('webLink');
    Route::get('/youtube-link/{slug}',[\App\Http\Controllers\ShowlinkController::class,'youtube'])->name('youtubeLink');

    Route::get('/youtube-items/favourite/{id}',[\App\Http\Controllers\FavouriteController::class,'store'])->name('favourite.store');
    Route::get('/youtube-favourite-items/favourite',[\App\Http\Controllers\FavouriteController::class,'index'])->name('favourite.index');
    Route::get('/youtube-favourite-items/favourite/{id}',[\App\Http\Controllers\FavouriteController::class,'destroy'])->name('favourite.destroy');

    Route::get('/wFavourite-items/favourite/{id}',[\App\Http\Controllers\WfavouriteController::class,'store'])->name('wFavourite.store');
    Route::get('/webs-favourite-items/favourite',[\App\Http\Controllers\WfavouriteController::class,'index'])->name('wFavourite.index');
    Route::get('/webs-favourite-items/favourite/{id}',[\App\Http\Controllers\WfavouriteController::class,'destroy'])->name('wFavourite.destroy');

});
