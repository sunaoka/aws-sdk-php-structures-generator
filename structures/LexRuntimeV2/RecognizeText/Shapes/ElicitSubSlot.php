<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ElicitSubSlot|null $subSlotToElicit
 */
class ElicitSubSlot extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     subSlotToElicit?: ElicitSubSlot|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
