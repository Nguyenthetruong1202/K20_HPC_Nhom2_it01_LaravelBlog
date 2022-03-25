<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return  view('main');
    }
    public function home()
    {
        return view('home', ['title' => 'home']);
    }
    public function blog()
    {
        return view('main', ['title' => 'blog']);
    }
    public function blog_post()
    {
        return view('blog-post', ['title' => 'bài viết']);
    }
    public function login()
    {
        return view('login', ['title' => 'đăng nhập']);
    }
    public function register()
    {
        return view('register', ['title' => 'đăng ký']);
    }
}