<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workerController extends Controller
{
    public function registerForm(){
        return view('painel.workes.register');
    }
}
