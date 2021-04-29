<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\facades\session;
use Illuminate\Support\facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('Login.login');
    }

    public function cek_login(Request $req){
        $this->validate($req, [
            'email'=>'required',
            'password' => 'required'
        ]);

        $proses=User::where('email', $req->email)
                    ->where('password', md5($req->password));

        if($proses->count()>0){
            $data=$proses->first();
            Session::put('name', $data->nama);
            Session::put('email', $data->email);
            Session::put('status', $data->status);
            Session::put('login_status', true);
            return redirect('/home');
        } else {
            // Session::flash('message', 'This is a message!');
            Session::flash('pesan', 'Email dan Password salah');
            return redirect('log in');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('log in');
    }
}
