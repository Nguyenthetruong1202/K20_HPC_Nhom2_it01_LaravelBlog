<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\school;
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
/*Route :: prefix('blog') -> group(function ()
{  
     Route ::get('/blog',function() {
    return view ('blog');
    });
    Route ::get('/blog-post',function() {
        return view ('blog-post');
    });
    Route ::get('/login',function(){
        return view('login');
    });
    Route:: get ('/register',function(){
        return view('register');
    });
});
*/
Route ::get('/blog',[school::class ,'blog']);
Route ::get('/blog-post',[school::class ,'blog_post']);
Route ::get('/login',[school::class ,'login']);
Route ::get('/register',[school::class ,'register']);
Route ::post('/Dashboard',[school::class ,'Dashboard']);

Route ::get('/token',[shool::class,'blog']
)-> middleware('validate_token');
