<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Fungsi untuk menampilkan halaman admin dengan semua data user
    public function index()
    {
        $userAll = User::all();
        return view('dashboard', compact('userAll'));
    }
}
