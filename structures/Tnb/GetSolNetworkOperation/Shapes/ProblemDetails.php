<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detail
 * @property string|null $title
 */
class ProblemDetails extends Shape
{
    /**
     * @param array{
     *     detail: string,
     *     title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
