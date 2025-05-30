<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SubSlotTypeComposition>|null $subSlots
 */
class CompositeSlotTypeSetting extends Shape
{
    /**
     * @param array{subSlots?: list<SubSlotTypeComposition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
