<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 */
class DescribeReceiptRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
