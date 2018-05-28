<?php

namespace App\ApiConsumers\IEX\Endpoints;

use BlackBits\ApiConsumer\Support\Endpoint;

/**
 * Class CompanyEndpoint
 * @package App\ApiConsumers\IEX\Endpoints
 */
class CompanyEndpoint extends Endpoint
{
    /**
     * @param $value
     * @return \Illuminate\Support\Collection|\Tightenco\Collect\Support\Collection
     * @throws \Exception
     */
    public function find($value)
    {
        $this->path = "/stock/{$value}/company";
        return $this->get();
    }
}
