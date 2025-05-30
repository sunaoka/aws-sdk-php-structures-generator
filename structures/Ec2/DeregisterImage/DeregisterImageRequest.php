<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool|null $DeleteAssociatedSnapshots
 * @property bool|null $DryRun
 */
class DeregisterImageRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     DeleteAssociatedSnapshots?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
