<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showlogin()
    {
        return view('login');
    }
    function loginProcess()
    {

        if (Auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin/dashboard')->with('success', 'login berhasil');
        } else {
            return back()->with('danger', 'login gagal,silahkan cek username dan password anda');
        }
    }
    function showlogout()
    {
        auth()->logout();

        return redirect('loginregulasi');
    }
}