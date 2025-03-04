<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeIdentityProviderConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OidcIdentityProviderConfig|null $oidc
 */
class IdentityProviderConfigResponse extends Shape
{
    /**
     * @param array{oidc?: OidcIdentityProviderConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
