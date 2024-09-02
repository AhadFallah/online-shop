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
        $isAuthenticated = auth('sanctum')->check();

        return [
            'id' => $this->id,
            'sellerName' => $this->seller->name,
            'category' => $this->ptype->category->name,
            'context' => $this->context,
            'color' => $this->color,
            'number' => $this->number,
            'size' => $this->size,
            'price' => $this->price,
            'commission' => $this->commission,
            'name' => $this->name,
            'description' => $this->description,
            'img' => $this->file->where('type', 'cover')->first(),
            'pimg' => $this->file()->where('type', '!=', 'cover')->limit(5)->get(),
            'bookmark' => $isAuthenticated ? auth('sanctum')->user()->bookmarks()->where('ptype_seller_id', $this->id,)->exists() : false,
            'comments' => CommentResource::collection($this->comments),

        ];
    }
}
