<?php

namespace Sunaoka\Aws\Structures\Cloud9\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property list<Shapes\Tag> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
