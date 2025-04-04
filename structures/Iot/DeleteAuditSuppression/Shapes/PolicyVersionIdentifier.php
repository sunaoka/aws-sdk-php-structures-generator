<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAuditSuppression\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property string|null $policyVersionId
 */
class PolicyVersionIdentifier extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyVersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
