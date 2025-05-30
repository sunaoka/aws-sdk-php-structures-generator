<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigurationRecorderNames
 * @property string|null $ServicePrincipal
 * @property string|null $Arn
 */
class DescribeConfigurationRecordersRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationRecorderNames?: list<string>|null,
     *     ServicePrincipal?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
