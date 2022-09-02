<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=['user_id','store_id','tax','sub_total','total','voucher_code','voucher_discount'];
    protected $hidden=['created_at','updated_at'];

    public function cartItems(){
        return $this->hasMany(CartItem::class,'cart_id','id');
    }

}
