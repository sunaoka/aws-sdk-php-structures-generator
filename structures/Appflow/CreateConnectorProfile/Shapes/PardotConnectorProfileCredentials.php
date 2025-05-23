<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessToken
 * @property string|null $refreshToken
 * @property ConnectorOAuthRequest|null $oAuthRequest
 * @property string|null $clientCredentialsArn
 */
class PardotConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     accessToken?: string|null,
     *     refreshToken?: string|null,
     *     oAuthRequest?: ConnectorOAuthRequest|null,
     *     clientCredentialsArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
