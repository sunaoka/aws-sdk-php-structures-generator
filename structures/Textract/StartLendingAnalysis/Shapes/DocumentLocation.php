<?php

namespace Sunaoka\Aws\Structures\Textract\StartLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $S3Object
 */
class DocumentLocation extends Shape
{
    /**
     * @param array{S3Object?: S3Object|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
