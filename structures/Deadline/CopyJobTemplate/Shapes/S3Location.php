<?php

namespace Sunaoka\Aws\Structures\Deadline\CopyJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $key
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
