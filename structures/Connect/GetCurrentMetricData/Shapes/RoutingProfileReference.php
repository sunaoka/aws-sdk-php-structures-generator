<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 */
class RoutingProfileReference extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
