<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $secretArn
 * @property UsernamePassword|null $usernamePassword
 */
class RedshiftCredentials extends Shape
{
    /**
     * @param array{
     *     secretArn?: string|null,
     *     usernamePassword?: UsernamePassword|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
