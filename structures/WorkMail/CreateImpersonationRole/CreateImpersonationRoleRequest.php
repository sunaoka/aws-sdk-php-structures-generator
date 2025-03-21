<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateImpersonationRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $OrganizationId
 * @property string $Name
 * @property 'FULL_ACCESS'|'READ_ONLY' $Type
 * @property string|null $Description
 * @property list<Shapes\ImpersonationRule> $Rules
 */
class CreateImpersonationRoleRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     OrganizationId: string,
     *     Name: string,
     *     Type: 'FULL_ACCESS'|'READ_ONLY',
     *     Description?: string|null,
     *     Rules: list<Shapes\ImpersonationRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
