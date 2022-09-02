<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'product_store_id' => $this->id,
            'title' => $this->products->title,
            'image' => $this->products->image,
            'price' => $this->products->price,
            'discount' => $this->products->discount,
            'discount_price' => $this->products->discount_price,
            'unit' => $this->products->unit,
            'items_per_unit' => $this->products->items_per_unit,
            'min_order' => $this->products->min_order,
            'stock'=>$this->stock,
            'is_18_plus'=>$this->products->is_18_plus,
            'description' => $this->products->description,
            'ingredients' => $this->products->ingredients,
            'allergen_information' => $this->products->allergen_information,
            'country_of_origin' => $this->products->country_of_origin,
            'manufacturer' => $this->products->manufacturer,
            'storage_conditions' => $this->products->storage_conditions,
            'expiration_date' => $this->products->expiration_date,
            'disclaimer' => $this->products->disclaimer,
            'tags' => SlugResource::collection($this->products->tags),
            'nutrition'=>NutritionResource::collection($this->products->nutrition),
        ];
    }
}

class SlugResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'icon' => $this->icon,
        ];
    }
}

class NutritionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'typical_values' => $this->typical_values,
            'per_100g_of_product' => $this->per_100g_of_product,
            'ri_per_100g' => $this->ri_per_100g,
        ];
    }
}
