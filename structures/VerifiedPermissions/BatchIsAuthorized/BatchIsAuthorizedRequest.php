<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property Shapes\EntitiesDefinition|null $entities
 * @property list<Shapes\BatchIsAuthorizedInputItem> $requests
 */
class BatchIsAuthorizedRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     entities?: Shapes\EntitiesDefinition|null,
     *     requests: list<Shapes\BatchIsAuthorizedInputItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
