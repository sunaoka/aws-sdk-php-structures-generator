<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class AnalysisTemplateValidationStatusReason extends Shape
{
    /**
     * @param array{message: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
