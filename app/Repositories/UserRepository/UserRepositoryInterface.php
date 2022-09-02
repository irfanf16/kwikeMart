<?php

namespace App\Repositories\UserRepository;

use App\Http\Requests\RegisterRequest;

interface UserRepositoryInterface{

    public function CreateUser($request);
    public function userAddress();
    public function addAddress($request);
    public function removeAddress($request);
}
