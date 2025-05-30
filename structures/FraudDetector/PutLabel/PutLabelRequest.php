<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 */
class PutLabelRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
