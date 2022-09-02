<?php

namespace App\Repositories\AuthRepository;

use App\Http\Requests\UserLoginRequest;

interface AuthRepositoryInterface{

    public function ifUserExists(UserLoginRequest $request);


}
