<?php

namespace App\User\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Support\Controller;

class VerificationController extends Controller
{
    use VerifiesEmails;

    protected function redirectTo(): string
    {
        return action(RouteServiceProvider::HOME);
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
