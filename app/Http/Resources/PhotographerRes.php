<?php

namespace App\Http\Resources;

use App\Models\Album;
use App\Models\Media;
use App\Http\Resources\AlbumRes;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotographerRes extends JsonResource
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
        $album = AlbumRes::collection(Album::where('photographer_id', '=' , $this->id)->get());
        return [
            'name' => $this->name,
            'email' => $this->email,
            'bio' => $this->bio,
            'profile_picture' => $media['path'],
            'album' => $album,
        ];
    }
}
