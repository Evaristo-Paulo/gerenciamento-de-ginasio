<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Month;
use App\Models\Client;
use App\Models\Worker;
use App\Models\Payment;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $funcao = new Worker();
            $workers = count($funcao->workers());
            $function = new Client();
            $clients = count($function->clients());

            $function = new Payment();
            $payments = $function->getLastMonthPaymentUser();
            $months = Month::all();
            $actual_date = Carbon::now()->month;
            $dividas = [];
            foreach($payments as $payment){
                if (($actual_date - $payment->month_id) != 0 ){
                    array_push($dividas, ($actual_date - $payment->month_id) );
                }
            }
            $debt_clients = count($dividas);

            return view('painel.home', compact('workers', 'clients', 'debt_clients'));
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
