<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Repositories\AuthRepository\AuthRepositoryInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public $auth;

    public function __construct(AuthRepositoryInterface $auth){
        $this->auth=$auth;
    }
    public function login(UserLoginRequest $request){
        $data=$this->auth->ifUserExists($request);

        ResponseNow('1','Account Successfully Log in.',$data,200);
    }
}
