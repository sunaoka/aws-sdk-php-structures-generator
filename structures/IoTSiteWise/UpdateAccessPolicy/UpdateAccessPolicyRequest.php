<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPolicyId
 * @property Shapes\Identity $accessPolicyIdentity
 * @property Shapes\ResourceShape $accessPolicyResource
 * @property 'ADMINISTRATOR'|'VIEWER' $accessPolicyPermission
 * @property string|null $clientToken
 */
class UpdateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     accessPolicyId: string,
     *     accessPolicyIdentity: Shapes\Identity,
     *     accessPolicyResource: Shapes\ResourceShape,
     *     accessPolicyPermission: 'ADMINISTRATOR'|'VIEWER',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
