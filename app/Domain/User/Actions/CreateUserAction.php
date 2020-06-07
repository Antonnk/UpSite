<?php


namespace Domain\User\Actions;


use Domain\User\Models\User;

class CreateUserAction
{
    public function execute(string $first_name, string $last_name, string $email, string $hashed_password): User
    {
        return User::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => $hashed_password,
        ]);
    }
}
