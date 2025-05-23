<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetBulkPublishDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class GetBulkPublishDetailsRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
