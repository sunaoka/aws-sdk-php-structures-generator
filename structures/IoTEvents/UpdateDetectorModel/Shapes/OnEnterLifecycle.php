<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Event>|null $events
 */
class OnEnterLifecycle extends Shape
{
    /**
     * @param array{events?: list<Event>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
