<?php

use Illuminate\Support\Facades\Route;
use \App\Http\controllers\School;
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
Route::get('/blog', [School::class, 'blog']);
Route::get('/blog-post', [School::class, 'blog_post']);
Route::get('/login', [School::class, 'login']);
Route::get('/register', [School::class, 'register']);
