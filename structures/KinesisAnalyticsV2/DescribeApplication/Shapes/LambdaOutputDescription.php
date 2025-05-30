<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 * @property string|null $RoleARN
 */
class LambdaOutputDescription extends Shape
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     RoleARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
