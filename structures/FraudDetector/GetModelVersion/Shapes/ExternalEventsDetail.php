<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataLocation
 * @property string $dataAccessRoleArn
 */
class ExternalEventsDetail extends Shape
{
    /**
     * @param array{
     *     dataLocation: string,
     *     dataAccessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
