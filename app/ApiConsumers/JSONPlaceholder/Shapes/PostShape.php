<?php

namespace App\ApiConsumers\JSONPlaceholder\Shapes;

use App\ApiConsumers\JSONPlaceholder\Endpoints\CommentEndpoint;
use App\ApiConsumers\JSONPlaceholder\Endpoints\UserEndpoint;
use BlackBits\ApiConsumer\Support\BaseShape;

/**
 * Class PostShape
 * @package App\ApiConsumers\JSONPlaceholder\Shapes
 */
class PostShape extends BaseShape
{
    /**
     * @var bool
     */
    protected $return_shape_data_only = false;

    /**
     * @var bool
     */
    protected $require_shape_structure = false;

    /**
     * @var array
     */
    protected $transformations = [];

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->hasOne(UserEndpoint::class, 'userId');
    }

    /**
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany(CommentEndpoint::class, 'id');
    }
}
