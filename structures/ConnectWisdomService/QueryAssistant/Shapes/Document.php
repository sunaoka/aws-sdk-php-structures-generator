<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentReference $contentReference
 * @property DocumentText|null $excerpt
 * @property DocumentText|null $title
 */
class Document extends Shape
{
    /**
     * @param array{
     *     contentReference: ContentReference,
     *     excerpt?: DocumentText|null,
     *     title?: DocumentText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
