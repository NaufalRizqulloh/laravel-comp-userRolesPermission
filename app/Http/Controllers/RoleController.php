<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use App\Models\UserHasRoles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        $users = User::get();
        $roles = Roles::get();
        $userHasRoles = UserHasRoles::get();

        return view('roles.index', compact('users', 'roles', 'userHasRoles'));
    }

    public function create() {
        return view('roles.create');
    }

    public function assign() {
        $users = User::get();
        $roles = Roles::get();
        return view('roles.assign', compact('users', 'roles'));
    }

    public function store(Request $request) {
        Roles::create([
            'role' => $request->roles,
        ]);

        return redirect()->back();
    }

    public function storeAssign(Request $request) {
        $username = $request->username;
        $roles = $request->roles;
        $userRoles = UserHasRoles::where('user_id', $username)->first();
        if ($userRoles) {
            $userRoles->update([
                'roles_id' => $roles
            ]);
        } else {
            UserHasRoles::create([
                'user_id' => $username,
                'roles_id' => $roles
            ]);
        }

        return redirect()->back();
    }
}
