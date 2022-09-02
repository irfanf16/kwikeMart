<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table=['cart_items'];
    public function productStore(){
        return $this->belongsTo(ProductStore::class,'product_store_id','id');
    }
    public function cart(){
        return $this->belongsTo(Cart::class,'cart_id','id');
    }
}
