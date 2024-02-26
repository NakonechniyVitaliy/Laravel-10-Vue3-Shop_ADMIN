<?php

namespace App\Http\Resources\Products;

use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'image_url' =>$this->getImageUrlAttribute(),
            'price' =>$this->price,
            'count' =>$this->count,
            'is_published' =>$this->is_published,
            'category'=>new CategoryResource($this->category)
        ];
    }
}