<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeEntitiesDetectionV2Job\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string|null $S3Key
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     S3Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
