<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelKmsKeyId
 * @property string|null $VolumeKmsKeyId
 * @property VpcConfig|null $VpcConfig
 */
class UpdateDataSecurityConfig extends Shape
{
    /**
     * @param array{
     *     ModelKmsKeyId?: string|null,
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
