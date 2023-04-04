<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'slug' => $this->slug,
            'price' => $this->price,
            'color' => explode(',', $this->color),
            'materials' => $this->materials,
            'brand' => $this->brand,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'image' => $this->image,
            'desc_image' => explode(',', $this->desc_image),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category' => new CategoryResource($this->category),
        ];
    }
}
