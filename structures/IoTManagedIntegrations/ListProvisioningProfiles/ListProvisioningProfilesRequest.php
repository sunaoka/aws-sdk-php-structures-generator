<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListProvisioningProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListProvisioningProfilesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
