<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function CategoryProducts(){
        return $this->hasMany(ProductStore::class)->with('products');
//        return $this->belongsToMany(Product::class);
    }
    public function categories(){
//        return $this->belongsToMany(Product::class, 'category_products', 'category_id', 'product_id')
//            ->withPivot('product_id','category_id');

        return $this->hasManyThrough(Category::class,Product::class);


    }
    public function products(){
        return $this->belongsToMany(Product::class,'product_stores','store_id','product_id','id');
    }
    public static function getNearestStore($latitude,$longitude){
     return   Store::selectRaw("id,name,logo,image_url,opening_Closing_time,
                     ( 6371 * acos( cos( radians(?) ) *
                       cos( radians( latitude ) )
                       * cos( radians( longitude ) - radians(?)
                       ) + sin( radians(?) ) *
                       sin( radians( latitude ) ) )
                     ) AS distance", [$latitude, $longitude,$latitude])
            ->where('active', '=', 1)
            ->having("distance", "<", 10)
            ->orderBy("distance", 'asc')
            ->first();
    }
}
