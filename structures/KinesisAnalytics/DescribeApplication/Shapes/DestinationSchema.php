<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'CSV' $RecordFormatType
 */
class DestinationSchema extends Shape
{
    /**
     * @param array{RecordFormatType: 'JSON'|'CSV'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
