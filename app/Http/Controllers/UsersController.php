<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function show(User $user) {
        //echo var_dump(compact('user'));
        return view('users.show', compact('user'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:2552',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程～');
        //route方法会自动获取Model的主键，也就是数据表users的主键id
        //以上代码等同于: redirect()->route('users.show', [$user->id])
        return redirect()->route('users.show', [$user]);
    }
}
