<?php

namespace Sunaoka\Aws\Structures\XRay\GetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $GroupARN
 * @property string|null $FilterExpression
 * @property InsightsConfiguration|null $InsightsConfiguration
 */
class GroupSummary extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     GroupARN?: string|null,
     *     FilterExpression?: string|null,
     *     InsightsConfiguration?: InsightsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
