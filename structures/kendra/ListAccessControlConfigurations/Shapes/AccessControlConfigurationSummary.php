<?php

namespace Sunaoka\Aws\Structures\kendra\ListAccessControlConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 */
class AccessControlConfigurationSummary extends Shape
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
