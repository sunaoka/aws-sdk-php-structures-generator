<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 */
class GetAutoSnapshotsRequest extends Request
{
    /**
     * @param array{resourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
