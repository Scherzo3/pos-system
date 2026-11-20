<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserAccount::all();

        return view('users', compact('users'));
    }
    public function create()
{
    return view('users.create');
}
public function store(Request $request)
{
    $request->validate([
        'username' => 'required|unique:user_accounts,username',
        'full_name' => 'required'
    ]);

    UserAccount::create([
        'username' => $request->username,
        'full_name' => $request->full_name
    ]);

    return redirect('/users');
}
public function edit($id)
{
    $user = UserAccount::findOrFail($id);

    return view('users.edit', compact('user'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'username' => 'required',
        'full_name' => 'required',
        'avatar' => 'nullable|image|max:2048'
    ]);

    $user = UserAccount::findOrFail($id);

    $user->username = $request->username;
    $user->full_name = $request->full_name;

    if ($request->hasFile('avatar')) {

        $path = $request->file('avatar')
                        ->store('avatars', 'public');

        $user->avatar = $path;
    }

    $user->save();

    return redirect('/users');
}

}