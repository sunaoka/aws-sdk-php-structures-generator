<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLIPBOARD_COPY_FROM_LOCAL_DEVICE'|'CLIPBOARD_COPY_TO_LOCAL_DEVICE'|'PRINTING_TO_LOCAL_DEVICE'|'SMART_CARD' $Action
 * @property 'ENABLED'|'DISABLED' $Permission
 * @property int<0, max>|null $MaximumLength
 */
class UserSetting extends Shape
{
    /**
     * @param array{
     *     Action: 'CLIPBOARD_COPY_FROM_LOCAL_DEVICE'|'CLIPBOARD_COPY_TO_LOCAL_DEVICE'|'PRINTING_TO_LOCAL_DEVICE'|'SMART_CARD',
     *     Permission: 'ENABLED'|'DISABLED',
     *     MaximumLength?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
