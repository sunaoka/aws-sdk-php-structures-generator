<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
