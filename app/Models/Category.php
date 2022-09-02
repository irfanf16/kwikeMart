<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable=['name','image','background_color','parent_id','active'];
//    protected $casts=['id'=>'integer','name'=>'string','image'=>'string','background_color'=>'string','is_parent'=>'boolean'];

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id','id');
    }
    public function parent_category()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProduct::class,'product_id','id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id','id');
    }
    public static function getHomeCategories(){
      return  Category::with(['subCategories' => function ($q) {
            $q->select('id', 'parent_id', 'name', 'image', 'background_color');
        }])
            ->whereNull('parent_id')
            ->select('id', 'name')
            ->get();
    }

}
