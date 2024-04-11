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
    public function list()
    {
        return view("crud.list");
    }



    public function loginIn(Request $request)
    {
       
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if ($true=Auth::attempt($credentials)) {
            return redirect()->intended('list')
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

    public function listUser()
    {
        if(Auth::check()){
            $users = User::all();
            return view('crud_user.list', ['users' => $users]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
