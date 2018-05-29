<?php

namespace App\CollectionCallbacks;

use BlackBits\ApiConsumer\Support\BaseCollectionCallback;
use Illuminate\Support\Collection;

class FilterNameCollectionCallback extends BaseCollectionCallback
{
    private $name;

    /**
     * FilterCollectionCallback constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param Collection &$collection
     * @return Collection
     */
    function applyTo(Collection &$collection) : Collection
    {
        return $collection->filter(function ($value, $key) {
            return str_contains($value->name, $this->name);
        });
    }
}
