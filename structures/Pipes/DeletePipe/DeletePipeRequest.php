<?php

namespace Sunaoka\Aws\Structures\Pipes\DeletePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeletePipeRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
