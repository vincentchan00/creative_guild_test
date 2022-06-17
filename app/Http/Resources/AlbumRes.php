<?php

namespace App\Http\Resources;

use App\Models\Media;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumRes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $media = new MediaRes(Media::findOrFail($this->media));
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "img" => $media['path'],
            "date" => $this->date,
            "featured" => $this->featured==1,
        ];

    }
}
