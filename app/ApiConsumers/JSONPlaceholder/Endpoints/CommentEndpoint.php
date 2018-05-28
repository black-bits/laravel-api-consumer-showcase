<?php

namespace App\ApiConsumers\JSONPlaceholder\Endpoints;

use BlackBits\ApiConsumer\Support\Endpoint;

/**
 * Class CommentEndpoint
 * @package App\ApiConsumers\JSONPlaceholder\Endpoints
 */
class CommentEndpoint extends Endpoint
{
    /**
     * @var string
     */
    protected $path = '/comments';

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
    public function findMany($value)
    {
        $this->path = "/posts/{$value}/comments";
        return $this->get();
    }

    /**
     * @param string $field
     * @param mixed $value
     * @return $this
     */
    public function where($field, $value)
    {
        $this->options[$field] = $value;
        return $this;
    }
}
