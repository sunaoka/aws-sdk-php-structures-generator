<?php

namespace Sunaoka\Aws\Structures\Ec2\ConfirmProductInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ProductCode
 * @property bool|null $DryRun
 */
class ConfirmProductInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ProductCode: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
