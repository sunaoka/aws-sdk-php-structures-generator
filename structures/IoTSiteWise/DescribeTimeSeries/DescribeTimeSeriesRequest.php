<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property string|null $assetId
 * @property string|null $propertyId
 */
class DescribeTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     assetId?: string|null,
     *     propertyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
