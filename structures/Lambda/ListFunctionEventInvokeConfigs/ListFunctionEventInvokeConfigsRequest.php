<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionEventInvokeConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Marker
 * @property int<1, 50>|null $MaxItems
 */
class ListFunctionEventInvokeConfigsRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
