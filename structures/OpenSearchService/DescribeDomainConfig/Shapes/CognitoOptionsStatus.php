<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoOptions $Options
 * @property OptionStatus $Status
 */
class CognitoOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: CognitoOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
