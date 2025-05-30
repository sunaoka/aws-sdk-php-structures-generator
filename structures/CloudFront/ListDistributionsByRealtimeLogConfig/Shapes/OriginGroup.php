<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByRealtimeLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property OriginGroupFailoverCriteria $FailoverCriteria
 * @property OriginGroupMembers $Members
 * @property 'default'|'media-quality-based'|null $SelectionCriteria
 */
class OriginGroup extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     FailoverCriteria: OriginGroupFailoverCriteria,
     *     Members: OriginGroupMembers,
     *     SelectionCriteria?: 'default'|'media-quality-based'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
