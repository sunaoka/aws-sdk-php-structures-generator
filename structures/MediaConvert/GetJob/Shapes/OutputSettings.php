<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsSettings|null $HlsSettings
 */
class OutputSettings extends Shape
{
    /**
     * @param array{HlsSettings?: HlsSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
