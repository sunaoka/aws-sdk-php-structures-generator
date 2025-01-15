<?php

namespace Sunaoka\Aws\Structures\DataZone\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataFormEnforcementDetail|null $metadataFormEnforcementDetail
 */
class RuleDetail extends Shape
{
    /**
     * @param array{metadataFormEnforcementDetail?: MetadataFormEnforcementDetail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
