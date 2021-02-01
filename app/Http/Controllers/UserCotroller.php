<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserCotroller extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('view', compact('users'));
    }

    public function create()
    {
        return view('createuser');
    }

    public function store(Request $request)
    {
        $data = request()->all();

        $usernew = new User();
        $usernew->image = '123';
        $usernew->username = $data['username'];
        $usernew->password = $data['password'];
        $usernew->full_name = $data['full_name'];
        $usernew->email = $data['email'];
        $usernew->role = '123';
        $usernew->save();

        return redirect()->route('user.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->all();

        $users = User::find($id);
        $users->username = $data['username'];
        $users->password = $data['password'];
        $users->full_name = $data['full_name'];
        $users->email = $data['email'];
        $users->save();

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('user.index');
    }
}
