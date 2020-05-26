<?php

namespace App\Http\Resources\DashboardsKeyword;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Dashboard\DashboardResource;

class DashboardsKeywordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  array_merge(
            parent::toArray($request),
            [
                /**
                 * Resources that can be included if requested.
                 */
                'dashboard' => new DashboardResource($this->whenLoaded('dashboard')),
            ]
        );
    }
}
