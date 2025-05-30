<?php

namespace Sunaoka\Aws\Structures\FMS\ListComplianceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListComplianceStatusRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
