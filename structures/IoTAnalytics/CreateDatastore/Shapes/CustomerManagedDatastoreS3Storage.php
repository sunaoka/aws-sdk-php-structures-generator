<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $keyPrefix
 * @property string $roleArn
 */
class CustomerManagedDatastoreS3Storage extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     keyPrefix?: string|null,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
