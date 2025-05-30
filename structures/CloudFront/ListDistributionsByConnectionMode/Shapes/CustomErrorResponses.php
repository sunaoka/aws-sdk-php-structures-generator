<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByConnectionMode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<CustomErrorResponse>|null $Items
 */
class CustomErrorResponses extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<CustomErrorResponse>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
