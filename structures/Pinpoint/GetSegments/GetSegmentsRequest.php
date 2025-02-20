<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string|null $PageSize
 * @property string|null $Token
 */
class GetSegmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     PageSize?: string|null,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
