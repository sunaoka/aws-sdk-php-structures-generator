<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tokenUrl
 * @property 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER' $oAuth2GrantType
 * @property array<string, string>|null $tokenUrlCustomProperties
 */
class OAuth2Properties extends Shape
{
    /**
     * @param array{
     *     tokenUrl: string,
     *     oAuth2GrantType: 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER',
     *     tokenUrlCustomProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
