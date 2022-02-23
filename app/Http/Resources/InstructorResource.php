<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstructorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
//        return [
//          'uuid' => $this->uuid,
//          'name' => $this->name,
//          'speciality' => $this->speciality,
//          'details' => $this->details,
//          'phone' => $this->phone,
//          'email' => $this->email,
//          'avatar' => $this->avatar,
//        ];
    }
}
