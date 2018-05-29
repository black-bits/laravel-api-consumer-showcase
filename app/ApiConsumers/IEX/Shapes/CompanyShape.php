<?php

namespace App\ApiConsumers\IEX\Shapes;

use BlackBits\ApiConsumer\Support\BaseShape;

/**
 * Class CompanyShape
 * @package App\ApiConsumers\IEX\Shapes
 */
class CompanyShape extends BaseShape
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
    protected $transformations = [
        'companyName' => 'company_name',
        'issueType'   => 'issue_type',
        'CEO'         => 'ceo'
    ];

    /**
     * @var array
     */
    protected $fields = [];
}
