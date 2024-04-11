<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
class authController extends Controller
{
    public function login()
    {
        return view('crud.login');
    }
    public function register()
    {
        return view('crud.register');
    }
    public function homepage()
    {
        return view("homepage");
    }

    public function loginIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('homepage')
                ->withSuccess('Da dang nhap');
        }

        return redirect("login")->withSuccess('Email hoac mat khau khong dung');
    }
   

    public function enrollRegister(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
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

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
