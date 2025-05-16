<?php

namespace App\Http\Dto\User\BO;

use App\Http\Dto\BasicDto;
use App\Models\User;
use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Unique;

class CreateUserDto extends BasicDto
{
    public string $name;

    #[Unique(User::class)]
    #[Email]
    public string $email;
}
