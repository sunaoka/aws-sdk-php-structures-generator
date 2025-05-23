<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<5, 86400> $timeToLiveInSeconds
 * @property int<1, 20> $turnsToLive
 */
class OutputContext extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     timeToLiveInSeconds: int<5, 86400>,
     *     turnsToLive: int<1, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
