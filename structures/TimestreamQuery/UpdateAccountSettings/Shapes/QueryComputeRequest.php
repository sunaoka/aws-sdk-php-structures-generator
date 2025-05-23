<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON_DEMAND'|'PROVISIONED'|null $ComputeMode
 * @property ProvisionedCapacityRequest|null $ProvisionedCapacity
 */
class QueryComputeRequest extends Shape
{
    /**
     * @param array{
     *     ComputeMode?: 'ON_DEMAND'|'PROVISIONED'|null,
     *     ProvisionedCapacity?: ProvisionedCapacityRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
