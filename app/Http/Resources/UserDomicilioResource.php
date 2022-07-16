<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserDomicilioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'domicilio' => $this->domicilio,
            'numero_exterior' => $this->numero_exterior,
            'cp' => $this->cp,
            'ciudad' => $this->ciudad,
        ];
    }
}
