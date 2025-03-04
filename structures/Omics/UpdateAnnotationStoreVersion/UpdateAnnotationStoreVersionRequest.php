<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateAnnotationStoreVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $versionName
 * @property string|null $description
 */
class UpdateAnnotationStoreVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     versionName: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
