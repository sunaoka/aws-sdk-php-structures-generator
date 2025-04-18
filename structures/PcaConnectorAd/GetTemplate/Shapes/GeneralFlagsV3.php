<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoEnrollment
 * @property bool|null $MachineType
 */
class GeneralFlagsV3 extends Shape
{
    /**
     * @param array{
     *     AutoEnrollment?: bool|null,
     *     MachineType?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
