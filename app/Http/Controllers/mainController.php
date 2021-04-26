<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            return view('painel.home');
        }
        return redirect()->route('login.form')->with('errorMessage', 'Faça login!');
    }
    public function loginForm()
    {
        return view('painel.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        //$remember = $request->has('remember');

        if (Auth::attempt($credentials)) {
            Auth::logoutOtherDevices($request->input('password'));
            /* Fez autenticação */
            $user = auth()->user();
            Auth::login($user);
            $funcao = new RoleUser();
            $roles_users = $funcao->rolesFromUser($user->id);
            //dd( $roles_users);
            /* Criação de variáveis de sessão */
            session()->put('perfies', $roles_users);

            return redirect()->route('home');
        }

        return redirect()->route('login.form')->withInput($request->all());
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.form');

    }
}
