<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class School extends Controller
{
    public function blog()
    {
        return view('blog', ['title' => 'blog']);
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