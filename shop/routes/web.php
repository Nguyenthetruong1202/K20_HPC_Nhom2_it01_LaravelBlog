<?php

use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route::get('/', [MainController::class, 'index']);


// Route::get('/', [MainController::class, 'home'])->name('home');
// Route::get('/blog', [MainController::class, 'blog'])->name('blog');
// Route::get('/blog-post', [MainController::class, 'blog_post'])->name('blog-post');
// Route::get('/login', [MainController::class, 'login'])->name('login');
// Route::get('/register', [MainController::class, 'register'])->name('register');



Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
      Route::get('', [MainController::class, 'index'])->name('index');
      Route::get('/main', [MainController::class, 'index']);
      Route::get('/add', [MainController::class, 'add'])->name('add');
      Route::post('/add', [MainController::class, 'postAdd'])->name('postAdd');
      Route::get('/edit/{id}', [MainController::class, 'getEdit'])->name('edit');
      Route::post('/update', [MainController::class, 'postEdit'])->name('postEdit');
      Route::get('/delete/{id}', [MainController::class, 'delete'])->name('delete');
});