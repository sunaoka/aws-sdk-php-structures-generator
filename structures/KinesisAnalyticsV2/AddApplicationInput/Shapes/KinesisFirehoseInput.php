<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 */
class KinesisFirehoseInput extends Shape
{
    /**
     * @param array{ResourceARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
