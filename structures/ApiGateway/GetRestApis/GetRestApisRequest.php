<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $position
 * @property int|null $limit
 */
class GetRestApisRequest extends Request
{
    /**
     * @param array{
     *     position?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
