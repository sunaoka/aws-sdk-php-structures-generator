<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetEventBridgeRuleTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class EventBridgeRuleTemplateTarget extends Shape
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
