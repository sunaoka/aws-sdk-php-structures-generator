<?php

namespace Sunaoka\Aws\Structures\KendraRanking\DescribeRescoreExecutionPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeRescoreExecutionPlanRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
