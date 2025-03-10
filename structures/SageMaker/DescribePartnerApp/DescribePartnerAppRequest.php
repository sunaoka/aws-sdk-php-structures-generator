<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DescribePartnerAppRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
