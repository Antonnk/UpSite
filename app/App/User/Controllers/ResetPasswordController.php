<?php

namespace App\User\Controllers;


use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Support\Controller;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;

    protected function redirectTo(): string
    {
        return action(RouteServiceProvider::HOME);
    }
}
