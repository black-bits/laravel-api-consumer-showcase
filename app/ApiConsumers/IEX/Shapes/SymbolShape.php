<?php

namespace App\ApiConsumers\IEX\Shapes;

use App\ApiConsumers\IEX\Endpoints\CompanyEndpoint;
use BlackBits\ApiConsumer\Support\BaseShape;

/**
 * Class SymbolShape
 * @package App\ApiConsumers\IEX\Shapes
 */
class SymbolShape extends BaseShape
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
        'symbol'    => 'symbol',
        'name'      => 'name',
        'date'      => 'date',
        'isEnabled' => 'is_enabled',
        'type'      => 'type',
        'iexId'     => 'iex_id'
    ];

    /**
     * @var array
     */
    protected $fields = [
        'symbol',
        'name',
        'date',
        'is_enabled',
        'type',
        'iex_id'
    ];

    /**
     * @return mixed
     */
    public function company()
    {
        return $this->hasOne(CompanyEndpoint::class, 'symbol');
    }
}
