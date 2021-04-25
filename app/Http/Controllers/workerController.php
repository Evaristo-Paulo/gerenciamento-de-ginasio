<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workerController extends Controller
{
    public function registerForm(){
        return view('painel.workes.register');
    }
    public function register(Request $request){

        dd( $request->all());
        return "Cheguei aqui! ... ";
    }
}
