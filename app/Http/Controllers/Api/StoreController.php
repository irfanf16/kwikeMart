<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Requests\FavoriteRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\VoucherRequest;
use App\Models\Category;
use App\Repositories\StoreRepository\StoreRepositoryInterface;
use Illuminate\Http\Request;
use stdClass;

class  StoreController extends Controller
{
    public $store;

    public function __construct(StoreRepositoryInterface $store)
    {
        $this->store = $store;
    }

    public function homeCategories(HomeRequest $request)
    {
        $data = $this->store->getNearestStore($request);
        ResponseNow('1', 'welcome to ' . $data['store']->name, $data, 200);
    }

    public function subCategoriesProduct(Request $request)
    {

        $data = $this->store->subCategoriesProduct($request);
        ResponseNow('1', 'Category with products ', $data, 200);

    }

    public function productDetail($product_store_id)
    {
        $data = $this->store->productDetail($product_store_id);
        ResponseNow('1', 'Product detail ', $data, 200);
    }

    public function favorites(FavoriteRequest $request)
    {
        $data = $this->store->favorites($request);

        ResponseNow('1', 'Favorite list is ', $data, 200);
    }

    public function addToFavorite(Request $request)
    {
        $data = $this->store->AddToFavorite($request);
        if ($data) {
            ResponseNow('1', 'favorite successfully added',  new stdClass(), 200);
        }
    }

    public function removeFavorite(Request $request)
    {
        $data = $this->store->removeFavorite($request);
        if ($data) {
            ResponseNow('1', 'favorite successfully remove',  new stdClass(), 200);
        }
    }

    public function cart()
    {
        $cart = $this->store->cart();
        ResponseNow('1', 'Cart Detail is ', $cart, 200);
    }

    public function addToCart(CartRequest $request)
    {

        $data = $this->store->AddToCart($request);
        if ($data == 0) {
            errorResponse('0', 'Something went wrong', ['No product in the list'], 200);
        }
        ResponseNow('1', 'products added to cart successfully', $data, 200);
    }

    public function applyVoucher(VoucherRequest $request){
        $data = $this->store->applyVoucher($request);
        ResponseNow('1', 'Voucher applied successfully', $data, 200);
    }

    public function paymentMethods()
    {
        $data = $this->store->paymentMethods();
        ResponseNow('1', 'Applicable payment methods list', $data, 200);

    }

    public function order(Request $request)
    {
        $data = $this->store->order($request);
        if ($data) {
            ResponseNow('1', 'Order placed Successfully',  new stdClass(), 200);
        }
    }

}
