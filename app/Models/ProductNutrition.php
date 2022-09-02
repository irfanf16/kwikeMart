<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductNutrition extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'typical_values',
        'per_100g_of_product',
        'ri_per_100g',
    ];
}
