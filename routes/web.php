<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stickerController;
use App\Http\Controllers\userController;
use App\Http\Controllers\packController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/main',[stickerController::class, 'getStickersMain'])->name('main');
Route::get('/logged',[stickerController::class, 'getStickers'])->name('logged');

/**
 * Operaciones con sticker
 */

    Route::get('/profile',[stickerController::class, 'goToProfile'])->name('profile');
    Route::get('/artStation',[stickerController::class, 'goToArtStation'])->name('artStation');
    Route::get('/myCollection',[stickerController::class, 'goToMyCollection'])->name('myCollection');
    Route::get('creation/{pack}',[stickerController::class, 'goToCreation'])->name('goToCreation');

    Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
    Route::get('/search',[stickerController::class, 'search'])->name('search');
    Route::get('/show',[stickerController::class, 'show'])->name('show');



/**
 * Operaciones con admin (en userController)
 */
Route::group(['middleware' => 'admin', "prefix"=>"admin", 'as' => "admin."], function(){
    Route::get('/admin',[userController::class, 'goToAdmin'])->name('admin');
    Route::get('/users',[userController::class,'goToUsers'])->name('users');
    Route::get('/packs',[userController::class,'goToPacks'])->name('packs');
    Route::get('/adminMain',[userController::class,'goToAdminMain'])->name('adminMain');

});


/**
 * Operaciones con usuario
 */
Route::group(["prefix"=>"user", 'as' => 'user.'], function(){
    Route::post('editar/{usu}', [userController::class, 'edit'])->name('edit');
    Route::get('delete/{usu}', [userController::class, 'delete'])->name('delete');
    Route::post('create',[userController::class, 'createUser'])->name('create');
});

/**
 * Operaciones con pack
 */
Route::group(["prefix"=>"pack", 'as' => 'pack.'], function(){
    Route::get('delete/{pack}',[packController::class, 'delete'])->name('delete');
    Route::post('create',[packController::class, 'create'])->name('create');

});


require __DIR__.'/auth.php';