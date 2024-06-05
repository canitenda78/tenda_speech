<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController; 
use App\Http\Controllers\TemplateController; 
use App\Http\Controllers\SiteController; 


Route::get('/', function () {
    return view('welcome');
});

//post/createにアクセスした際にPostControllerのcreate()を実行する
Route::get('post/create', [PostController::class, 'create']);

//postディレクトリでpost送信された際にPostControllerのstore()を実行する
Route::post('post', [PostController::class, 'store'])->name('post.store');

//postにアクセスした際にPostControllerのindex()を実行する
Route::get('post/index', [PostController::class, 'index'])->name('post.index');

//投稿の削除を実行するメソッドへのルート
Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

//
Route::get('/new-master', [TemplateController::class, 'index']);

Route::get('/site/top', [SiteController::class, 'index']);