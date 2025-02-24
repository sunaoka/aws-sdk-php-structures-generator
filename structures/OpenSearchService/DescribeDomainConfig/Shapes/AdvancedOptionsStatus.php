<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Options
 * @property OptionStatus $Status
 */
class AdvancedOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: array<string, string>,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
