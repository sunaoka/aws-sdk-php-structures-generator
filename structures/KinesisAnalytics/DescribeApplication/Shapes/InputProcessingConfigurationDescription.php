<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLambdaProcessorDescription|null $InputLambdaProcessorDescription
 */
class InputProcessingConfigurationDescription extends Shape
{
    /**
     * @param array{InputLambdaProcessorDescription?: InputLambdaProcessorDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
