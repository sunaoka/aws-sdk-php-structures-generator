<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Serializer|null $Serializer
 */
class OutputFormatConfiguration extends Shape
{
    /**
     * @param array{Serializer?: Serializer|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
