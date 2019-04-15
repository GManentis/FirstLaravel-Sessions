<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Illuminate\Http\Request;


class ConnectUser extends Controller
{
    public function connect()
    {
        if(Session::has('user'))
        {
            $user_temp = Session::get('user');
            $user = "Welcome, ".$user_temp."&nbsp<a href='/logout'>Logout</a>&nbsp;<a style='color:red;' href='/delete'>Delete account</a>";
        }
        else
        {
            $user ="<a class='btn btn-default' href='/login'>Log In</a>&nbsp;<a class='btn btn-default' href='/signup'>Sign Up</a>";
            $image ='';
        }

        return view('index', ['user' => $user]);
    }

    public function login(Request $request)
    {
        $name = $request->username;
        $password = $request->password;

        $count = DB::table('users')->where('username', $name)->where('password', $password)->count();
        if($count == 1)
        {
            Session::put('user',$name);
            return redirect("/");
        }
        else
        {
            $message = "<span style='color:red;'>Please insert valid credentials!</span>";
            return view('login',['message' => $message]);
        }
    }

    public function firstEnter()
    {
        if(Session::has('user'))
        {
            return redirect("/");
        }
        else
        {
            return view('login',['message'=>'']);
        }

    }
}
