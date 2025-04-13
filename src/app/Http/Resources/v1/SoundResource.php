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
            'id' => $this->id,
            'title' => $this->title,
            'soundFile' => env('APP_URL') . 'sounds/' . $this->sound_file,
            'imageFile' => env('APP_URL') . 'images/' . $this->image_file,
            'originalUrl' => $this->original_url
        ];
    }
}
