<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironmentMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'owner'|'read-write'|'read-only' $permissions
 * @property string $userId
 * @property string $userArn
 * @property string $environmentId
 * @property \Aws\Api\DateTimeResult|null $lastAccess
 */
class EnvironmentMember extends Shape
{
    /**
     * @param array{
     *     permissions: 'owner'|'read-write'|'read-only',
     *     userId: string,
     *     userArn: string,
     *     environmentId: string,
     *     lastAccess?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
