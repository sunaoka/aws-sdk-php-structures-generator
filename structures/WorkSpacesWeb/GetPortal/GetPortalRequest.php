<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class GetPortalRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
