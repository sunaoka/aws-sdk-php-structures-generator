<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateProvisioningTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $payloadVersion
 * @property string $targetArn
 */
class ProvisioningHook extends Shape
{
    /**
     * @param array{
     *     payloadVersion?: string|null,
     *     targetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
