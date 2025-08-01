<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListComputeQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Lend'|'DontLend'|'LendAndBorrow' $Strategy
 * @property int<0, 500>|null $BorrowLimit
 */
class ResourceSharingConfig extends Shape
{
    /**
     * @param array{
     *     Strategy: 'Lend'|'DontLend'|'LendAndBorrow',
     *     BorrowLimit?: int<0, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
