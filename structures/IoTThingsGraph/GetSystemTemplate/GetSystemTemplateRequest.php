<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property int|null $revisionNumber
 */
class GetSystemTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     revisionNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
