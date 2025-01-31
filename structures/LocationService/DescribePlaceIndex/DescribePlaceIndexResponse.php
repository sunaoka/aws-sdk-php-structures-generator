<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribePlaceIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IndexName
 * @property string $IndexArn
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property string $DataSource
 * @property Shapes\DataSourceConfiguration $DataSourceConfiguration
 * @property array<string, string>|null $Tags
 */
class DescribePlaceIndexResponse extends Response
{
}
