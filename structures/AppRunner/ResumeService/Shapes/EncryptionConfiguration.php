<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKey
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{KmsKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
