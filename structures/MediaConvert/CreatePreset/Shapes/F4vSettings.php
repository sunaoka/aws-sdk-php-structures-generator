<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROGRESSIVE_DOWNLOAD'|'NORMAL'|null $MoovPlacement
 */
class F4vSettings extends Shape
{
    /**
     * @param array{MoovPlacement?: 'PROGRESSIVE_DOWNLOAD'|'NORMAL'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
