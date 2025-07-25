<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $Bucket
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 * @property string|null $DataSourceId
 * @property string|null $DataSourceType
 */
class ListAccessPointsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null,
     *     DataSourceId?: string|null,
     *     DataSourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
