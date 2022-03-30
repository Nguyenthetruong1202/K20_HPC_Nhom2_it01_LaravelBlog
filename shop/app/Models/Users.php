<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Users extends Model
{

    use HasFactory;

    protected $table = 'users';

    public function getAllUsers()
    {
        $users = DB::select('select * from user');
        return $users;
    }
    public function addUser($data)

    {
        DB::insert('INSERT INTO user( fullname ,email , create_at) value(? ,? ,?) ', $data);
    }
    public function getDetail($id)
    {

        return DB::select('select * from ' . $this->table . ' where id = ?', [$id]);
    }
}