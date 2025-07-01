<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class JobResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'salary' => $this->salary,
            'location' => $this->location,
            'image' => $this->image,
            'job_type' => $this->job_type,
            'experience_level' => $this->experience_level,
            'company' => [
                'id' => $this->company->id,
                'name' => $this->company->name,
                'logo' => $this->company->logo,
                'type' => $this->company->type,
                'size' => $this->company->size,
                'sector' => $this->company->sector,
                'address' => $this->company->address,
                'city' => $this->company->city,
                'country' => $this->company->country,
            ],
        ];
    }
}
