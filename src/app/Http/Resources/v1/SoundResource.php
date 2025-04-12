<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class SoundResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'soundFile' => URL::to(Storage::url('sounds/' . $this->sound_file)),
            'imageFile' => URL::to(Storage::url('images/' . $this->image_file)),
            'originalUrl' => $this->original_url
        ];
    }
}
