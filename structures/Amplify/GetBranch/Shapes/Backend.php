<?php

namespace Sunaoka\Aws\Structures\Amplify\GetBranch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stackArn
 */
class Backend extends Shape
{
    /**
     * @param array{stackArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
