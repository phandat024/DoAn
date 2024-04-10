<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

/*
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('homepage')
                ->withSuccess('Da dang nhap');
        }

        return redirect("login")->withSuccess('Email hoac mat khau khong dung');
    }
*/
   

    public function enrollRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('Ban da tao tai khoan');
    }
    
    public function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
/*
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
    */
}
