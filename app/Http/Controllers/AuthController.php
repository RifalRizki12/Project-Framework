<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            // return redirect('/dashboard');
            return redirect('/check');
        }
        return redirect('/login')->with('error','Email Atau Password salah');
    }

    public function register()
    {
        return view('auths.register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users',
        ]);

        //input pendaftar sebagai user dulu
        $user = new \App\User;
        $user->role = 'pembeli';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke tabel siswa
        $request->request->add(['user_id' => $user->id ]);
        $pembeli = \App\models\Pembeli::create($request->all());

        return redirect('/login')->with('sukses','Pendaftaran Berhasil');
    }
     
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
