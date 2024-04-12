<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'author' => $this->author,
            'content' => $this->body,
            'date' => $this->created_at,
            'updated_at' => $this->updated_at,
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
        ];
    }
}
