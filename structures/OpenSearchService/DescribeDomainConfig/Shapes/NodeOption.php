<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'coordinator'|null $NodeType
 * @property NodeConfig|null $NodeConfig
 */
class NodeOption extends Shape
{
    /**
     * @param array{
     *     NodeType?: 'coordinator'|null,
     *     NodeConfig?: NodeConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
