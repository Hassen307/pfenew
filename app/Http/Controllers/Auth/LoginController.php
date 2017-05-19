<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        Session::flush();
    }
    public function credentials(Request $request)
{
    return [
        'email' => $request->email,
        'password' => $request->password,
        'verified' => 1,
    ];
}

}
