<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsListResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title,
'description' => trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($this->description)))),
            "highlighted_news" => $this->highlighted_news,
            'image'=>$this->full_image_path,
            "created_at" => $this->created_at->toDateString(),

        ];
    }
}
