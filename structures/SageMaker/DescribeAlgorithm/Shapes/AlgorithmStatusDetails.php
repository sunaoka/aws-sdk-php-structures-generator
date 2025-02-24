<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlgorithmStatusItem>|null $ValidationStatuses
 * @property list<AlgorithmStatusItem>|null $ImageScanStatuses
 */
class AlgorithmStatusDetails extends Shape
{
    /**
     * @param array{
     *     ValidationStatuses?: list<AlgorithmStatusItem>|null,
     *     ImageScanStatuses?: list<AlgorithmStatusItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
