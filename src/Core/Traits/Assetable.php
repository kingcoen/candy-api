<?php

namespace GetCandy\Api\Core\Traits;

use GetCandy\Api\Core\Assets\Models\Asset;
use GetCandy\Api\Core\Assets\Models\AssetTransform;

trait Assetable
{
    public function assets()
    {
        return $this->morphMany(Asset::class, 'assetable');
    }

    public function primaryAsset()
    {
        return $this->assets()->where('primary', '=', 1)->with('transforms');
    }
}
