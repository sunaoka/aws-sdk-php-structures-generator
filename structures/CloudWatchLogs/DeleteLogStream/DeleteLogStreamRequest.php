<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLogStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logStreamName
 */
class DeleteLogStreamRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     logStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
