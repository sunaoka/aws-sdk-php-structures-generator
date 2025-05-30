<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customAuthenticationType
 * @property array<string, string>|null $credentialsMap
 */
class CustomAuthCredentials extends Shape
{
    /**
     * @param array{
     *     customAuthenticationType: string,
     *     credentialsMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
