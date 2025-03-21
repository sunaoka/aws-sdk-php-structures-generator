<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailBlankingImage
 */
class AvailBlanking extends Shape
{
    /**
     * @param array{AvailBlankingImage?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
