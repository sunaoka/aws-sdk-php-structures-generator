<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\DeleteStreamGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteStreamGroupRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
