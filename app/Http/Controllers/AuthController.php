<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AuthController extends Controller
{
    public function  store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        return "It works";
    }

    public function  signIn(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        return "It works";
    }
}
