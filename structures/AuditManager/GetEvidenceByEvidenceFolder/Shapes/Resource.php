<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceByEvidenceFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $value
 * @property string|null $complianceCheck
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     value?: string|null,
     *     complianceCheck?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
