<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventBusArn
 */
class EventBridgeDataSourceConfig extends Shape
{
    /**
     * @param array{eventBusArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
