<?php

namespace App\ApiConsumers\IEX;

use BlackBits\ApiConsumer\ApiConsumer;

/**
 * Class IEX
 * @package App\ApiConsumers\IEX
 */
class IEX extends ApiConsumer
{
    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function getEndpoint()
    {
        return config('api-consumers.IEX.apiBasePath');
    }
}
