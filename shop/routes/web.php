<?php

use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('admin/users/login', [LoginController::class, 'index']);
Route::post('admin/users/login/store', [LoginController::class, 'store']);
Route::get('admin/main', [MainController::class, 'index'])->name('index');

Route::get('/', [MainController::class, 'index']);


Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog-post', [MainController::class, 'blog_post'])->name('blog-post');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/register', [MainController::class, 'register'])->name('register');