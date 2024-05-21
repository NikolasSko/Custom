<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DesignResource extends JsonResource
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
            'user_id' => $this->user_id,
            'item' => $this->item,
            'gender' => $this->gender,
            'size' => $this->size,
            'design_description' => $this->design_description,
            'reference' => $this->reference,
            'is_design' => $this->is_design,

        ];
    }
}
