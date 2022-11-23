<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $req){
        // dd($req->all()); //dump and die
        $req->validate([
            'name' => 'required',
            'email'=>'required|unique:users,Email',
            'password'=>'required'
        ]);


        // $data = new User();
        // $data->Name=$req->name;
        // $data->Email=$req->email;
        // $data->Password=$req->password;
        // $data->save();

        User::create([
            'Name' => $req->name,
            'Email' => $req->email,
            'Password' =>Hash::make($req->password) 
        ]);

        return redirect('/login');

    }
}
