<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StripeCardRequest;
use App\Repositories\StripeRepository\StripeRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Resources\StripeCardResource;
use stdClass;

class StripeController extends Controller
{
    private $stripe;

    public function __construct(StripeRepositoryInterface $stripe)
    {
        $this->stripe = $stripe;
    }

    public function cardList(){
        $response = $this->stripe->getCardList();
        if(!is_null($response)){
            $default_card = StripeCardResource::make($response['default_card']);
            $otherCards = StripeCardResource::collection($response['cards']['data']);
            ResponseNow('1', 'list of cards', ['default_card' => $default_card, 'other_cards' => $otherCards],200);
        }
        errorResponse('0', 'Something went wrong.!', ['No card found'],200);

    }
    public function addCard(StripeCardRequest $request)
    {
        $response = $this->stripe->addCard($request);
        ResponseNow('1', 'Card added successfully', new stdClass(), 200);

    }

    public function removeCard(StripeCardRequest $request){
        $response = $this->stripe->removeCard($request);
        ResponseNow(1, 'Card removed successfully',new stdClass(),200);
    }
}
