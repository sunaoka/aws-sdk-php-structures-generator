<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $StackName
 * @property string|null $Description
 * @property 'ALL'|'ASSOCIATED' $AppVisibility
 * @property list<Shapes\EntitlementAttribute> $Attributes
 */
class CreateEntitlementRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     StackName: string,
     *     Description?: string|null,
     *     AppVisibility: 'ALL'|'ASSOCIATED',
     *     Attributes: list<Shapes\EntitlementAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
