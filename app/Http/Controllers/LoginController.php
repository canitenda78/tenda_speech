<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }
}
