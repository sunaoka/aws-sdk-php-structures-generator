<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibilityBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 */
class ChangeMessageVisibilityBatchResultEntry extends Shape
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
