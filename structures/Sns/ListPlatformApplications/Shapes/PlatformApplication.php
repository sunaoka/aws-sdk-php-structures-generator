<?php

namespace Sunaoka\Aws\Structures\Sns\ListPlatformApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlatformApplicationArn
 * @property array<string, string>|null $Attributes
 */
class PlatformApplication extends Shape
{
    /**
     * @param array{
     *     PlatformApplicationArn?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
