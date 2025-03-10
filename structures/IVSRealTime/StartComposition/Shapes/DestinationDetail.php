<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Detail|null $s3
 */
class DestinationDetail extends Shape
{
    /**
     * @param array{s3?: S3Detail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
