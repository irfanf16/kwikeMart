<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'sub_categories'=>CategoryResource::collection($this->subCategories),

        ];
    }
}
class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'products'=>ProductsResource::collection($this->products),

        ];
    }
}
class ProductsResource extends JsonResource
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
                'product_store_id' =>  $this->productStore[0]->id,
                'store_id' =>  $this->productStore[0]->store_id,
                'title' => $this->title,
                'image' => $this->image,
                'price' => $this->price,
                'discount' => $this->discount,
                'discount_price' => $this->discount_price,
                'unit' => $this->unit,
                'items_per_unit' => $this->items_per_unit,
                'min_order'=>$this->min_order,
                'is_18_plus'=>$this->is_18_plus,
                'stock'=>$this->productStore[0]->stock,
            ];
        }
}
