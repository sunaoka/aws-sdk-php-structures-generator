<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBParameterGroupName
 * @property string|null $ParameterApplyStatus
 */
class DBParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     DBParameterGroupName?: string|null,
     *     ParameterApplyStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
