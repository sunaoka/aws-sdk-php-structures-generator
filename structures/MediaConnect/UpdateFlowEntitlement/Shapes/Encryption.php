<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aes128'|'aes192'|'aes256'|null $Algorithm
 * @property string|null $ConstantInitializationVector
 * @property string|null $DeviceId
 * @property 'speke'|'static-key'|'srt-password'|null $KeyType
 * @property string|null $Region
 * @property string|null $ResourceId
 * @property string $RoleArn
 * @property string|null $SecretArn
 * @property string|null $Url
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'aes128'|'aes192'|'aes256'|null,
     *     ConstantInitializationVector?: string|null,
     *     DeviceId?: string|null,
     *     KeyType?: 'speke'|'static-key'|'srt-password'|null,
     *     Region?: string|null,
     *     ResourceId?: string|null,
     *     RoleArn: string,
     *     SecretArn?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
