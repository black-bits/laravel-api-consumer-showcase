<?php

namespace App\ApiConsumers\IEX\Endpoints;

use BlackBits\ApiConsumer\Support\Endpoint;

/**
 * Class SymbolEndpoint
 * @package App\ApiConsumers\IEX\Endpoints
 */
class SymbolEndpoint extends Endpoint
{
    /**
     * @var string
     */
    protected $path = '/ref-data/symbols';

    /**
     * @var bool
     */
    protected $shouldCache = true;

    /**
     * @var int
     */
    protected $cacheDurationInMinutes = 1;

    /**
     * @return \Illuminate\Support\Collection|\Tightenco\Collect\Support\Collection
     * @throws \Exception
     */
    public function all()
    {
        return $this->get();
    }
}
