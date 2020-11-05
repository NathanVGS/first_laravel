<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public static function handle(Request $request)
    {
        if($request->method()==="GET"){
            return self::get();
        } else if ($request->method()==="POST"){
            return self::post();
        }
    }

    private static function get()
    {
        return view('register');
    }

    private static function post()
    {
        return "something was submitted!";
    }
}
