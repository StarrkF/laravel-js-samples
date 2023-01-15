<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TableController;
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
    return view('pages.home.content');
});

Route::get('posts',[PostController::class,'index'])->name('get.posts');
Route::post('post/update',[PostController::class,'update'])->name('post.post-update');
Route::get('posts/{id}',[PostController::class,'show']);

Route::prefix('tables')->group(function(){

    Route::get('selectable',[TableController::class,'selectable'])->name('get.table-selectable');

});
