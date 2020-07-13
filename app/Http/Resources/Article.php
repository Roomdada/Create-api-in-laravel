<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['name'=>'nom de mon article :'.$this->name,
         'content:'=> substr($this->description, 0, 10).'...'
     ];
    }
}
