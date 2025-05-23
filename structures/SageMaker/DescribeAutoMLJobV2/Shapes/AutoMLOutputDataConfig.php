<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property string $S3OutputPath
 */
class AutoMLOutputDataConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     S3OutputPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
