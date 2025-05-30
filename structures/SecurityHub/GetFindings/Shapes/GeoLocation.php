<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Lon
 * @property double|null $Lat
 */
class GeoLocation extends Shape
{
    /**
     * @param array{
     *     Lon?: double|null,
     *     Lat?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
