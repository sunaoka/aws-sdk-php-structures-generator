<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRemoteAccessSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $nextToken
 */
class ListRemoteAccessSessionsRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
