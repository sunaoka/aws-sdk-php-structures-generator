<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateSlotTypeVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $checksum
 */
class CreateSlotTypeVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     checksum?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
