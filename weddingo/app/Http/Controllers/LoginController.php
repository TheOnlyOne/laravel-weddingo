<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Request;
use Response;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('master-client-view.login');
    }

    public function login()
    {
        $user = User::getByEmail(Request::get('email'));
        if (count($user) != 0) {
            if($user->password == Request::get('password')) {
                Auth::login($user);
                return Response::json([
                    'success' => true,
                    'errors' => null
                ]);
            }
        }
        return Response::json([
            'success' => false,
            'errors' => "האימייל או הסיסמה אינם נכונים"
        ]);
    }
}
