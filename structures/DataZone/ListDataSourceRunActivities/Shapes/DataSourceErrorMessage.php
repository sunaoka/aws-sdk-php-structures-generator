<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorDetail
 * @property 'ACCESS_DENIED_EXCEPTION'|'CONFLICT_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'THROTTLING_EXCEPTION'|'VALIDATION_EXCEPTION' $errorType
 */
class DataSourceErrorMessage extends Shape
{
    /**
     * @param array{
     *     errorDetail?: string|null,
     *     errorType: 'ACCESS_DENIED_EXCEPTION'|'CONFLICT_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'THROTTLING_EXCEPTION'|'VALIDATION_EXCEPTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
