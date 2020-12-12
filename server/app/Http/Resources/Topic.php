<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * APIのリソースファイル
 */
class Topic extends JsonResource
{
    /**
     * Transform the resource into an array.
     * Eloquentを元にして、どの項目がAPIとして返されるかを設定
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'date' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
