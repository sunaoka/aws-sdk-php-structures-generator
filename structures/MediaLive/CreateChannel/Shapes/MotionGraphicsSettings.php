<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HtmlMotionGraphicsSettings|null $HtmlMotionGraphicsSettings
 */
class MotionGraphicsSettings extends Shape
{
    /**
     * @param array{HtmlMotionGraphicsSettings?: HtmlMotionGraphicsSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
