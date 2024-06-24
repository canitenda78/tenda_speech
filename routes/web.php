<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController; 
use App\Http\Controllers\TemplateController; 
use App\Http\Controllers\SiteController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//post/createにアクセスした際にPostControllerのcreate()を実行する
Route::get('post/create', [PostController::class, 'create'])->name('post.create');

//postディレクトリでpost送信された際にPostControllerのstore()を実行する
Route::post('post', [PostController::class, 'store'])->name('post.store');

//postにアクセスした際にPostControllerのindex()を実行する
Route::get('post/index', [PostController::class, 'index'])->name('post.index');

//投稿の削除を実行するメソッドへのルート
Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

//
Route::get('/new-master', [TemplateController::class, 'index']);

// //site/topを表示するメソッドへのルート
Route::get('/site/top', [SiteController::class, 'index'])->name('site.top');

//ログイン画面に遷移するルート
Route::get('/login', [LoginController::class, 'showLoginForm']);

