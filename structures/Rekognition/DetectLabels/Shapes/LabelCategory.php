<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class LabelCategory extends Shape
{
    /**
     * @param array{Name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
