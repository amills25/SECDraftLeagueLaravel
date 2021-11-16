<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckoutsResource extends JsonResource
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
            'id' => (string)$this->id,
            'type' => 'Checkouts',
            'attributes' => [
                'book_id' => $this->book_id,
                'user_id' => $this->user_id,
                'checked_out' => $this->checked_out,
                'checked_in' => $this->checked_in,
            ]
        ];
    }
}
