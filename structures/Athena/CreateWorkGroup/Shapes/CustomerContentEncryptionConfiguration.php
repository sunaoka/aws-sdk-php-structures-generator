<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKey
 */
class CustomerContentEncryptionConfiguration extends Shape
{
    /**
     * @param array{KmsKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
