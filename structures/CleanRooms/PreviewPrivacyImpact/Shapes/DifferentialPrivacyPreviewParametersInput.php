<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 20> $epsilon
 * @property int<10, 100> $usersNoisePerQuery
 */
class DifferentialPrivacyPreviewParametersInput extends Shape
{
    /**
     * @param array{
     *     epsilon: int<1, 20>,
     *     usersNoisePerQuery: int<10, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
