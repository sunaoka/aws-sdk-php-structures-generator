<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionArn
 * @property int<1, 1000>|null $maxResult
 * @property string|null $nextToken
 */
class ListTestGridSessionActionsRequest extends Request
{
    /**
     * @param array{
     *     sessionArn: string,
     *     maxResult?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
