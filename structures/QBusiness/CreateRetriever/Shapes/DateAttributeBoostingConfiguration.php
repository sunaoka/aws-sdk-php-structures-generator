<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO' $boostingLevel
 * @property int<0, 999999999>|null $boostingDurationInSeconds
 */
class DateAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     boostingLevel: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO',
     *     boostingDurationInSeconds?: int<0, 999999999>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
