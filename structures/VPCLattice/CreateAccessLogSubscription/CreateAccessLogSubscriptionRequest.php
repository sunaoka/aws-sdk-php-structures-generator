<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateAccessLogSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $destinationArn
 * @property string $resourceIdentifier
 * @property 'SERVICE'|'RESOURCE'|null $serviceNetworkLogType
 * @property array<string, string>|null $tags
 */
class CreateAccessLogSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     destinationArn: string,
     *     resourceIdentifier: string,
     *     serviceNetworkLogType?: 'SERVICE'|'RESOURCE'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
