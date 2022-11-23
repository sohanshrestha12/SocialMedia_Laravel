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

    public function Login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'

        ]);


        // $user = User::where('Email','=',$req->email)->get();
        // if($user->count()>0){
        //     foreach($user as $item){
                
        //         if(Hash::check($req->password,$item->Password)){
        //             return redirect('/');
        //         }
        //         else{
        //             return back()->with('pmsg','Password is not valid!');
        //         }
        //     }
        // }
        $user = User::where('Email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->Password)){
                return redirect('/');
            }
            else{
                return back()->with('pmsg','Password is not valid!');
            }
        }
        else{
            return back()->with('emsg','Email is not valid!');
        }
    }
}
