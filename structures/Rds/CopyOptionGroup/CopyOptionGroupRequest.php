<?php

namespace Sunaoka\Aws\Structures\Rds\CopyOptionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceOptionGroupIdentifier
 * @property string $TargetOptionGroupIdentifier
 * @property string $TargetOptionGroupDescription
 * @property list<Shapes\Tag>|null $Tags
 */
class CopyOptionGroupRequest extends Request
{
    /**
     * @param array{
     *     SourceOptionGroupIdentifier: string,
     *     TargetOptionGroupIdentifier: string,
     *     TargetOptionGroupDescription: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
