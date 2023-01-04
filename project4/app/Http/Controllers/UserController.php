<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $data['list_user'] = user::all();
        return view('user.index', $data);
    }
    function Create()
    {
        return view('user.create');
    }
    function Store()
    {
        $user = new user;
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('success', 'data berhasil ditambahkan');
    }
    function Show(user $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);
    }
    function edit(user $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    function update(user $user)
    {

        $user->username = request('username');
        if (request('password')) $user->password = bcrypt(request('password'));
        $user->save();
        return redirect('admin/user')->with('sucsess', 'data berhasil tambahkan');
    }
    function destroy(user $user)
    {
        $user->delete();

        return redirect('admin/user')->with('danger', 'data berhasil dihapus');
    }
}