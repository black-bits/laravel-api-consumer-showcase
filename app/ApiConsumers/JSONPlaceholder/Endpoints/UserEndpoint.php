<?php

namespace App\ApiConsumers\JSONPlaceholder\Endpoints;

use BlackBits\ApiConsumer\Support\Endpoint;

/**
 * Class UserEndpoint
 * @package App\ApiConsumers\JSONPlaceholder\Endpoints
 */
class UserEndpoint extends Endpoint
{
    /**
     * @var string
     */
    protected $path = '/users';

    /**
     * @return \Illuminate\Support\Collection|\Tightenco\Collect\Support\Collection
     * @throws \Exception
     */
    public function all()
    {
        return $this->get();
    }

    /**
     * @param $value
     * @return \Illuminate\Support\Collection|\Tightenco\Collect\Support\Collection
     * @throws \Exception
     */
    public function find($value)
    {
        $this->path = sprintf('/users/%s', $value);
        return $this->get();
    }
}
