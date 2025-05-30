<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $clientIds
 * @property string|null $userPoolArn
 * @property string|null $discoveryUrl
 * @property 'COGNITO'|null $openIdIssuer
 */
class IdentitySourceItemDetails extends Shape
{
    /**
     * @param array{
     *     clientIds?: list<string>|null,
     *     userPoolArn?: string|null,
     *     discoveryUrl?: string|null,
     *     openIdIssuer?: 'COGNITO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
