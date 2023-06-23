<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $pattern = '/(\d{3})(\d{2})(\d{5})(\d{2})(\d{1})/';
        $replacement = '$1-$2-$3-$4-$5';
        return [
            'indentify'     => $this->id,
            'Book Title'    => $this->name,
            'ISBN'          => preg_replace($pattern, $replacement, $this->isbn),
            'Value'         => $this->value
        ];
    }
}
