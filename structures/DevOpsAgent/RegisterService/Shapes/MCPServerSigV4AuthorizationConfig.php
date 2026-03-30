<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $service
 * @property string $roleArn
 */
class MCPServerSigV4AuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     service: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
