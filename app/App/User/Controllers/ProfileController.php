<?php

namespace App\User\Controllers;


use Support\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile.index');
    }
}
