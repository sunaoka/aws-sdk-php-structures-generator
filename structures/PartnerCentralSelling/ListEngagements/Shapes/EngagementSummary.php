<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Title
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property int|null $MemberCount
 */
class EngagementSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Title?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     MemberCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
