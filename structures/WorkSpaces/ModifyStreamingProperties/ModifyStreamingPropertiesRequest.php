<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyStreamingProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\StreamingProperties|null $StreamingProperties
 */
class ModifyStreamingPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     StreamingProperties?: Shapes\StreamingProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
