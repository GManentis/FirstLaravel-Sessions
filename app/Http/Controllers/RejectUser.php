<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class RejectUser extends Controller
{
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function delete()
    {
        $user = Session::get('user');
        DB::table('users')->where('username',$user)->delete();
        Session::flush();
        return redirect('/');
    }
}
