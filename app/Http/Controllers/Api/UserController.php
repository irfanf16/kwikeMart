<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserAddressRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository\UserRepositoryInterface;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user;
    public function __construct(UserRepositoryInterface $user){

        $this->user=$user;
    }

    public function store(RegisterRequest $request){
        $data=$this->user->CreateUser($request);
        ResponseNow('1','Account Created Successfully.',$data,200);
    }
    public function userAddress(){

        $data = $this->user->userAddress();
        ResponseNow('1', 'User addresses list is ', $data, 200);
    }
    public function addAddress(UserAddressRequest $request){
        $data = $this->user->addAddress($request);
        if ($data){
            ResponseNow('1', 'address added successfully ', null, 200);
        }
    }
    public function removeAddress(UserAddressRequest $request){
        $data = $this->user->removeAddress($request);
            ResponseNow('1', 'address removed successfully ', null, 200);

    }

}
