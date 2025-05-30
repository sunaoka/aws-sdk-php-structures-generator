<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KPIConditionalFormattingOption>|null $ConditionalFormattingOptions
 */
class KPIConditionalFormatting extends Shape
{
    /**
     * @param array{ConditionalFormattingOptions?: list<KPIConditionalFormattingOption>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
