<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $req)
    {
        // dd($req->all()); //dump and die
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users,Email',
            'password' => 'required'
        ]);


        // $data = new User();
        // $data->Name=$req->name;
        // $data->Email=$req->email;
        // $data->Password=$req->password;
        // $data->save();

        User::create([
            'Name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        return redirect('/login');
    }

    public function Login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'

        ]);
        if(Auth::attempt(
            [
                'email' => $req->email,
                'password' => $req->password
            ]
        )){
            return redirect('/');
        }else{
            return back()->with('msg','login Failed');
        }
    }
    public function Logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
