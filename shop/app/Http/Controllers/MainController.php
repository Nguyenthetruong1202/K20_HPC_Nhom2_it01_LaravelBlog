<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = new Users();
    }

    public function index()
    {
        $users = new Users();

        $usersList = $this->users->getAllUsers();
        $title =  'Trang quản trị admin';
        return view('admin.home', compact('title', 'usersList'));
    }

    public function add()
    {
        $title =  'Trang  thêm người dùng';
        return view('admin.add', compact('title'));
    }
    public function postAdd(UserRequest $request)
    {
        $dataInsert = [
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s'),
        ];
        $this->users->addUser($dataInsert);
        return redirect()->route('admin.index')->with('msg', 'Thêm người dùng thành công');
    }
    public function getEdit($id = 0)
    {
        $title =  'Trang  sửa người dùng';
        if (!empty($id)) {
        } else {
            return redirect()->route('admin.index')->with('msg', 'người dùng không tồn tại');
        }
        return view('admin.edit', compact('title'));
    }




    public function postEdit()
    {
        return 'ddaay la postEdit';
    }
    public function delete()
    {
        return 'ddaay la delete';
    }








    // temlate blog


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