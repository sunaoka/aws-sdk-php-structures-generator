<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASS_100'|'CLASS_300'|'CLASS_480'|null $XavcClass
 */
class Xavc4kIntraCbgProfileSettings extends Shape
{
    /**
     * @param array{XavcClass?: 'CLASS_100'|'CLASS_300'|'CLASS_480'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
