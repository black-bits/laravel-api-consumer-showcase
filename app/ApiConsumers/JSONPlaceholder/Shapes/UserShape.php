<?php

namespace App\ApiConsumers\JSONPlaceholder\Shapes;

use BlackBits\ApiConsumer\Support\BaseShape;

/**
 * Class UserShape
 * @package App\ApiConsumers\JSONPlaceholder\Shapes
 */
class UserShape extends BaseShape
{
    /**
     * @var bool
     */
    protected $return_shape_data_only = true;

    /**
     * @var bool
     */
    protected $require_shape_structure = true;

    /**
     * @var array
     */
    protected $transformations = [
        "name" => "fullname",
    ];

    /**
     * @var array
     */
    protected $fields = [
        'id',
        'fullname',
        'username',
        'email',
        'phone',
        'website'
    ];


}
