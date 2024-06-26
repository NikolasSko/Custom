<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'photo' => $this->photo,
            'gender' => $this->gender,
            'size' => $this->size,
            'description' => $this->description,
            'price' => $this->price,
            'status' => $this->status,

        ];
    }
}
