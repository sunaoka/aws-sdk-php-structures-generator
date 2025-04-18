<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
