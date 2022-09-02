<?php

namespace App\Repositories\StripeRepository;

use Illuminate\Http\Request;

interface StripeRepositoryInterface {

    public function addCard($request);
    public function removeCard($request);
    public function getCardList();
}
