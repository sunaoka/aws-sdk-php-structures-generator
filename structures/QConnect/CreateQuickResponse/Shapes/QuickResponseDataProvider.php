<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 */
class QuickResponseDataProvider extends Shape
{
    /**
     * @param array{content?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
