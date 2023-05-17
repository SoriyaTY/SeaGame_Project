<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'eventName'=>$this->eventName,
            'description'=>$this->description,
            'created_by'=>$this->user,
            'schedule'=>$this->schedule,
            'ticket'=>$this->teams ?? null,
            'teams'=>TeamResource::collection($this->teams)
        ];
    }
}
