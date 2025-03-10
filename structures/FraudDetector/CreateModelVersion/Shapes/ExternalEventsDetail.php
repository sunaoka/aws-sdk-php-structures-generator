<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateModelVersion\Shapes;

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
