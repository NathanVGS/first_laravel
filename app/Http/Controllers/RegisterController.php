<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

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
        $user = new User();
        $user->fill([
            'name' => $request->userName,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'roles' => ['ROLE_REGISTERED']
        ]);
        $user->save();
        return "something was submitted!";
    }
}

