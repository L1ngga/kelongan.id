<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\suppoert\facades\DB;

class RegisterController extends Controller
{
    public function index(){
        return view('Login.register');
    }
}
