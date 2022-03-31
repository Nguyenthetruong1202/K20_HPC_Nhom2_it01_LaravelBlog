<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateRequest;
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
    public function getEdit(Request $request, $id = 0)
    {
        $title =  'Trang  sửa người dùng';

        if (!empty($id)) {
            $userDetail = $this->users->getDetail($id);
            if (!empty($userDetail[0])) {
                $request->session()->put('id', $id);
                $userDetail = $userDetail[0];
            } else {

                return redirect()->route('admin.index')->with('msg', 'người dùng không tồn tại');
            }
        } else {
            return redirect()->route('admin.index')->with('msg', 'người dùng không tồn tại');
        }
        return view('admin.edit', compact('title', 'userDetail'));
    }




    public function postEdit(updateRequest $request)
    {
        $id = session('id');
        if (empty($id)) {
            return back()->with('msg', 'người dùng không tồn tại');
        }
        $dataUpdate = [
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s'),

        ];
        $this->users->updateData($dataUpdate, $id);
        return back()->with('msg', 'cập nhật người dùng thành công');
    }


    public function delete($id = 0)
    {
        if (!empty($id)) {
            $userDetail = $this->users->getDetail($id);
            if (!empty($userDetail[0])) {

                $deleteStatus  =    $this->users->deleteUser($id);
                if ($deleteStatus) {
                    $msg = 'xóa người dùng thành công';
                } else {
                    $msg = 'bạn không thể xóa vui lòng thử lại';
                }
            } else {
                $msg = 'người dùng không tồn tại';
            }
        } else {
            $msg = 'liên kết không tồn tại';
        }
        return   redirect()->route('admin.index')->with('msg', $msg);
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