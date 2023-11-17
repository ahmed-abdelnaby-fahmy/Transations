<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as BaseLoginController;

class LoginController extends BaseLoginController
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('customer.auth.login');
    }

    public function redirectPath()
    {
        return 'customer/dashboard';
    }
}
