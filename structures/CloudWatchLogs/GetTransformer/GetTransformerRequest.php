<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 */
class GetTransformerRequest extends Request
{
    /**
     * @param array{logGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
