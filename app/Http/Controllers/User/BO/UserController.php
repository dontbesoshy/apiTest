<?php

namespace App\Http\Controllers\User\BO;

use App\Http\Controllers\Controller;
use App\Http\Dto\User\BO\CreateUserDto;
use App\Services\User\BO\UserService;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use JsonResponseTrait;

    /**
     * UserController constructor.
     *
     * @param UserService $userService
     */
    public function __construct(private readonly UserService $userService)
    {
    }

    /**
     * Store a new user.
     *
     * @param CreateUserDto $dto
     *
     * @return JsonResponse
     */
    public function store(CreateUserDto $dto): JsonResponse
    {
        $this->userService->create($dto);

        return $this->OK();
    }
}
