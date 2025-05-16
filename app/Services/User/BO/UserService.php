<?php

namespace App\Services\User\BO;

use App\Http\Dto\User\BO\CreateUserDto;
use App\Models\User;

class UserService
{
    /**
     * Create a new user.
     *
     * @param CreateUserDto $dto
     *
     * @return void
     */
    public function create(CreateUserDto $dto): void
    {
        User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => \Hash::make('password'),
        ]);
    }
}
