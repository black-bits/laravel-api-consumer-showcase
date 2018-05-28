<?php

namespace App\ApiConsumers\JSONPlaceholder\Shapes;

use BlackBits\ApiConsumer\Support\BaseShape;

/**
 * Class CommentShape
 * @package App\ApiConsumers\JSONPlaceholder\Shapes
 */
class CommentShape extends BaseShape
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
}
