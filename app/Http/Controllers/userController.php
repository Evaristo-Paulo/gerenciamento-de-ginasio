<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function registerForm()
    {
        if (Auth::check()) {
            $roles = Role::all();
            return view('painel.users.register', compact('roles'));
        }
        return redirect()->route('login.form')->with('errorMessage', 'Faça login!');
    }
    public function list()
    {
        if (Auth::check()) {
            $roles = Role::all();
            $user = User::all();
            return view('painel.users.list', compact('roles'));
        }
        return redirect()->route('login.form')->with('errorMessage', 'Faça login!');
    }
    public function register(Request $request)
    {
        try {

            $user = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ];
            $result = User::create($user);

            foreach ($request->input('role') as $value) {
                $roleUser = new RoleUser();
                $role_id = Role::where('type', $value)->first()->id;
                $roleUser->user_id = $result->id;
                $roleUser->role_id = $role_id;
                $roleUser->save();
            }
            return redirect()->route('user.register.form');
        } catch (\Exception $e) {
            return $e->getMessage();
            //return redirect()->back()->withInput($request->all());
        }
    }
}
