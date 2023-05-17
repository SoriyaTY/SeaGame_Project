<?php

namespace App\Http\Resources;

use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->id,
            "price"=>$this->price,
            "zone"=>$this->zone,
            "address"=>$this->address,
            "user"=>$this->user,
            "events"=>$this->events,
            "schedule"=>$this->schedule
        ];
    }
}
