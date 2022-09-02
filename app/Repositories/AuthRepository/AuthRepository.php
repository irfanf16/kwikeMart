<?php

namespace App\Repositories\AuthRepository;

use App\Http\Requests\UserLoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use function Symfony\Component\String\u;

class AuthRepository implements AuthRepositoryInterface{

    public function ifUserExists(UserLoginRequest $request){
        if($request->has('phone')){
            $user= User::Where("phone", $request->phone)->first();
            if(!$user){
                errorResponse('0','User Not Found.!',['User Does Not Exist. Please Sign up'],200);
            }
            $user->device_token=$request->device_token;
            $user->save();
            $user['token']=$user->createToken('kwikemart')->plainTextToken;
            $user=UserResource::make($user);
            return $user;
        }
    }
}
