<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as BaseLoginController;

class LoginController extends BaseLoginController
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function redirectPath()
    {
        return 'admin/dashboard';
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
