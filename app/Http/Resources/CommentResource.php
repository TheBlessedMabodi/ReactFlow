<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'post_id' => $this->post_id,
            'author' => $this->author_name,
            'author_email' => $this->author_email,
            'content' => $this->content,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // Assuming Post is related to Comment
            'post' => new PostResource($this->whenLoaded('post')),
        ];
    }
}
