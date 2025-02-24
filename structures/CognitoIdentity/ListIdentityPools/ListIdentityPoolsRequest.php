<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentityPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 60> $MaxResults
 * @property string|null $NextToken
 */
class ListIdentityPoolsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults: int<1, 60>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
