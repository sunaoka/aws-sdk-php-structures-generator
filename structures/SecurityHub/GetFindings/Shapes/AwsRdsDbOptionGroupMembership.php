<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OptionGroupName
 * @property string|null $Status
 */
class AwsRdsDbOptionGroupMembership extends Shape
{
    /**
     * @param array{
     *     OptionGroupName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
