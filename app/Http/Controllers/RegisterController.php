<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public static function handle(Request $request)
    {
        if($request->method()==="GET"){
            return self::get();
        }

        if ($request->method()==="POST"){
            return self::post($request);
        }
    }

    private static function get()
    {
        return view('register');
    }

    private static function post($request)
    {
        $user = new User;
        $user->setPassword($request->input('password'));
        $user->setEmail($request->input('email'));
        $user->setUserName($request->input('userName'));
        $user->save();
        return "something was submitted!";
    }
}

