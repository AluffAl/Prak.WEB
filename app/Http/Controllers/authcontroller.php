<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{

    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function beranda() {
        return view('auth.beranda');
    }

    public function penjumlahan() {
        return view('auth.penjumlahan');
    }

    public function validation() {
        return view('auth.validation');
    }

    public function kalkulator() {
        return view('auth.kalkulator');
    }

    public function todolist() {
        return view('auth.todolist');
    }
}

