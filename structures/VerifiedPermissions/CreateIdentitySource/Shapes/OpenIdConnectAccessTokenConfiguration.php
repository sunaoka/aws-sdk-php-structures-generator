<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $principalIdClaim
 * @property list<string>|null $audiences
 */
class OpenIdConnectAccessTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     principalIdClaim?: string|null,
     *     audiences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
