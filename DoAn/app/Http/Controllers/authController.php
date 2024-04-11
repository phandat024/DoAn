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



    public function loginIn(Request $request)
    {
       
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
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
            'sdt' => 'required',
        ]);

     
        $data = $request->all();
        User::create([
            'sdt' => $data['sdt'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),  
            
        ]);
        return redirect("login")->withSuccess('Ban da tao tai khoan');
    }
    

    public function listUser()
    {
        $users = User::all();      
            if(Auth::check()){
                $users = User::all();
                return view('crud.list', ['users' => $users]);          
        }
        return redirect("login")->withSuccess('You are not allowed to access');
  
    }

    public function deleteUser(Request $request) {
        $id = $request->get('id');
        $user = User::destroy($id);
        return redirect("list")->withSuccess('You have signed-in');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud.update', ['user' => $user]);
    }

    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

       $user = User::find($input['id']);
       $user->email = $input['email'];
       $user->password = $input['password'];
       $user->save();

        return redirect("list")->withSuccess('You have signed-in');
    }
}
