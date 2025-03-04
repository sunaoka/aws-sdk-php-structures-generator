<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{ApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
