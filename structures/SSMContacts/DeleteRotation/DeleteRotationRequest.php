<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeleteRotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationId
 */
class DeleteRotationRequest extends Request
{
    /**
     * @param array{RotationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
