<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddTagsToResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsToResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
