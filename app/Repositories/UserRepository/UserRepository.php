<?php

namespace App\Repositories\UserRepository;

use App\Http\Resources\UserResource;
use App\Models\AppSetting;
use App\Models\Role;
use App\Models\User;
use App\Repositories\UserRepository\UserRepositoryInterface;
use App\Http\Requests\RegisterRequest;
use App\Traits\CreateStripeCustomerTrait;
use Illuminate\Support\Str;


class UserRepository implements UserRepositoryInterface
{

    use CreateStripeCustomerTrait;

    public function CreateUser($request)
    {
        $refer_receiver_coins = null;

        if (!is_null($request->get('refer_code'))) {
            $referal_user = User::where('refer_code', $request->get('refer_code'))->first();
            if (!$referal_user) {
                errorResponse('0', 'Something went wrong.!', ['refer code is wrong'], 200);
            }
//            $appSetting = AppSetting::all();
//            dd($appSetting);
            $refer_sender_coins = AppSetting::where(['shortcode' => 'refer_coins', 'value1' => 'refer_sender_coins'])->first()->value2;
            $refer_receiver_coins = AppSetting::where(['shortcode' => 'refer_coins', 'value1' => 'refer_receiver_coins'])->first()->value2;
            $referal_user->coins += $refer_sender_coins;
            $referal_user->save();
        }
        $request['coins'] = $refer_receiver_coins;
        $request['refer_code'] = Str::random(6);
        $user = User::create($request->all());
        $stripe_customer_id = $this->createStripeCustomer($user);
        $user->update([
            'stripe_customer_id' => $stripe_customer_id
        ]);
        $Role = Role::where('name', 'Customer')->first();
        $user->roles()->attach($Role);
        $user['token'] = $user->createToken('kwikemart')->plainTextToken;
        $user = UserResource::make($user);
        return $user;
    }

    public function userAddress()
    {
        $data = auth()->user()->addresses()->select('id', 'address', 'latitude', 'longitude')->get();
        return $data;
    }

    public function addAddress($request)
    {
        $data = auth()->user()->addresses()->create($request->all())->get();
        return $data;
    }

    public function removeAddress($request)
    {
        $data = auth()->user()->addresses()->where('id', $request->get('id'))->delete();
        return 1;
    }


}
