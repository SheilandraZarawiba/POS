<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // update data user dengan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama'
        ];

        UserModel::where('username', 'customer-1')->update($data); // update data user

        // ambil semua data dari tabel m_user
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}