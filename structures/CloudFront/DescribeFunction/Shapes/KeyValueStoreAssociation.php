<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyValueStoreARN
 */
class KeyValueStoreAssociation extends Shape
{
    /**
     * @param array{KeyValueStoreARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
