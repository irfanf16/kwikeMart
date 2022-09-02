<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductStore extends Model
{
    use HasFactory;

    protected $casts = [
        'discount'=>'integer'
    ];
    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
