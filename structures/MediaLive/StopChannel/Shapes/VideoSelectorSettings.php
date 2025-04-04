<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoSelectorPid|null $VideoSelectorPid
 * @property VideoSelectorProgramId|null $VideoSelectorProgramId
 */
class VideoSelectorSettings extends Shape
{
    /**
     * @param array{
     *     VideoSelectorPid?: VideoSelectorPid|null,
     *     VideoSelectorProgramId?: VideoSelectorProgramId|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
