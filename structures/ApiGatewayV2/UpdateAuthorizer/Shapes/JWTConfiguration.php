<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Audience
 * @property string|null $Issuer
 */
class JWTConfiguration extends Shape
{
    /**
     * @param array{
     *     Audience?: list<string>|null,
     *     Issuer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
