<?php

namespace App\ApiConsumers\JSONPlaceholder;

use BlackBits\ApiConsumer\ApiConsumer;

/**
 * Class JSONPlaceholder
 * @package App\ApiConsumers\JSONPlaceholder
 */
class JSONPlaceholder extends ApiConsumer
{
    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function getEndpoint()
    {
        return config('api-consumers.JSONPlaceholder.apiBasePath');
    }
}
