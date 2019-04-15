<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Users;
use Session;
use DB;

class CreateUser extends Controller
{
    public function FirstVisit()
    {
            $message = "";
            return view('userForm',['message'=>$message]);
    }

    public function createUser(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $password2 = $request->password2;
        $mail = $request->mail;

        $status = 1;
        $errMsg = "";

        if(empty($username))
        {
            $status = 0;
            $errMsg .= "<span style='color:red;'>Usename is missing</span><br>";
        }
        else
        {
            $count = DB::table('users')->where('username',$username)->count();
            if($count != 0)
            {
                $status = 0;
                $errMsg .= "<span style='color:red;'>Username already in use</span><br>";
            }
        }

        if(empty($password))
        {
            $status = 0;
            $errMsg .= "<span style='color:red;'>Password is missing</span><br>";
        }

        if(empty($password2))
        {
            $status = 0;
            $errMsg .= "<span style='color:red;'>Repeated Password is missing</span><br>";
        }

        if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
        {
            $status = 0;
            $errMsg .= "<span style='color:red;'>Invalid E-mail</span><br>";
        }
        else
        {
            $count = DB::table('users')->where('email',$mail)->count();
            if($count != 0)
            {
                $status = 0;
                $errMsg .= "<span style='color:red;'>E-mail already in use</span><br>";
            }
        }


        if($status == 1)
        {
            $saveVars = new Users();
            $saveVars->username = $username;
            $saveVars->password = $password;
            $saveVars->email = $mail;
            $saveVars->save();
            Session::put('user',$username);

            return redirect("/");
        }
        else
        {
            $message = $errMsg;
            return view('userForm',['message'=>$message]);
        }

    }

}
