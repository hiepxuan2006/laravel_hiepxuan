<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('view', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

        return redirect()->action('App\Http\Controllers\ViewController@index');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->action('App\Http\Controllers\ViewController@index');
    }
}
