<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipCodeResource extends JsonResource
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
            'zip_code' => $this->zip_code,
            'locality' => $this->locality,
            'federal_entity' => $this->federal_entity,
            'municipality' => [
                'key' => (int)$this->c_mnpio,
                'name' => $this->d_mnpio
            ],
            'settlements' => $this->settlements,
        ];
    }
}
