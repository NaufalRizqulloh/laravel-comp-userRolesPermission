<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use App\Models\UserHasRoles;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        $roles = Roles::get();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        UserHasRoles::create([
            'user_id' => $user->id,
            'roles_id' => $request->roles
        ]);

        return redirect()->back();
    }
}
