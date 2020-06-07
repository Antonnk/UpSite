<?php

namespace App\User\Controllers;

use App\Providers\RouteServiceProvider;
use Domain\User\Actions\CreateUserAction;
use Domain\User\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Support\Controller;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $createUserAction;

    protected function redirectTo(): string
    {
        return action(RouteServiceProvider::HOME);
    }

    public function show()
    {
        return view('user.auth.register');
    }

    public function __construct(CreateUserAction $createUserAction)
    {
        $this->middleware('guest');
        $this->createUserAction = $createUserAction;
    }

    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function create(array $data): User
    {
        return $this->createUserAction->execute($data['first_name'], $data['last_name'], $data['email'], Hash::make($data['password']));
    }
}
