<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeUserProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $IamUserArns
 */
class DescribeUserProfilesRequest extends Request
{
    /**
     * @param array{IamUserArns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
