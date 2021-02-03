<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use SebastianBergmann\Diff\Exception;

class UserCotroller extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('view', compact('users'));
    }

    function create()
    {
        return view('createuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required_with:password|same:password',
            'full_name' => 'required',
            'email' => 'required|email:rfc,dns',
        ]);
        try {
            $data = request()->all();
            $usernew = new User();
            $usernew->image = '123';
            $usernew->username = $data['username'];
            $usernew->password = $data['password'];
            $usernew->full_name = $data['full_name'];
            $usernew->email = $data['email'];
            $usernew->role = '123';
            $usernew->save();
        }catch (Exception $exception){
            abort(404, 'not found');
        }

        return redirect()->route('users.index');
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
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:255',
            'full_name' => 'required',
            'email' => 'required|email:rfc,dns'
        ]);
        try {
            $data = request()->all();
            $users = User::find($id);
            $users->username = $data['username'];
            $users->password = $data['password'];
            $users->full_name = $data['full_name'];
            $users->email = $data['email'];
            $users->save();
        }catch (Exception $exception){
            abort(404, 'not found');
        }

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
            $users = User::find($id);
            $users->delete();

        return redirect()->route('users.index');
    }
}
