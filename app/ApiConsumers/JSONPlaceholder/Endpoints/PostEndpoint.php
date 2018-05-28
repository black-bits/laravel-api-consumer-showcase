<?php

namespace App\ApiConsumers\JSONPlaceholder\Endpoints;

use BlackBits\ApiConsumer\Support\Endpoint;

/**
 * Class PostEndpoint
 * @package App\ApiConsumers\JSONPlaceholder\Endpoints
 */
class PostEndpoint extends Endpoint
{
    /**
     * @var string
     */
    protected $path = 'posts';

    /**
     * @return \Illuminate\Support\Collection|\Tightenco\Collect\Support\Collection
     * @throws \Exception
     */
    public function all()
    {
        return $this->get();
    }

    /**
     * @param $field
     * @param $value
     * @return $this
     */
    public function where($field, $value)
    {
        $this->options[$field] = $value;
        return $this;
    }
}
