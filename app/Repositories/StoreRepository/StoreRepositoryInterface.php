<?php

namespace App\Repositories\StoreRepository;

use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;


interface StoreRepositoryInterface {

    public function getNearestStore($request);
    public function subCategoriesProduct($request);
    public function productDetail($store_product_id);
    public function favorites($request);
    public function addToFavorite($request);
    public function removeFavorite($request);
    public function addToCart($request);
    public function Cart();
    public function order($request);
    public function paymentMethods();
    public function applyVoucher($request);

}
