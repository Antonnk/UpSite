<?php

namespace App\User\Controllers;


use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Support\Controller;

class ConfirmPasswordController extends Controller
{

    use ConfirmsPasswords;

    protected function redirectTo(): string
    {
        return action(RouteServiceProvider::HOME);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
