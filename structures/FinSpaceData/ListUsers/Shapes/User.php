<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 * @property 'CREATING'|'ENABLED'|'DISABLED'|null $status
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $emailAddress
 * @property 'SUPER_USER'|'APP_USER'|null $type
 * @property 'ENABLED'|'DISABLED'|null $apiAccess
 * @property string|null $apiAccessPrincipalArn
 * @property int|null $createTime
 * @property int|null $lastEnabledTime
 * @property int|null $lastDisabledTime
 * @property int|null $lastModifiedTime
 * @property int|null $lastLoginTime
 */
class User extends Shape
{
    /**
     * @param array{
     *     userId?: string|null,
     *     status?: 'CREATING'|'ENABLED'|'DISABLED'|null,
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     emailAddress?: string|null,
     *     type?: 'SUPER_USER'|'APP_USER'|null,
     *     apiAccess?: 'ENABLED'|'DISABLED'|null,
     *     apiAccessPrincipalArn?: string|null,
     *     createTime?: int|null,
     *     lastEnabledTime?: int|null,
     *     lastDisabledTime?: int|null,
     *     lastModifiedTime?: int|null,
     *     lastLoginTime?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
