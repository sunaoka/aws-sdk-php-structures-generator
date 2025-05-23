<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetId
 * @property Shapes\AssetFilterConfiguration $configuration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string $domainId
 * @property list<string>|null $effectiveColumnNames
 * @property string|null $effectiveRowFilter
 * @property string|null $errorMessage
 * @property string $id
 * @property string $name
 * @property 'VALID'|'INVALID'|null $status
 */
class UpdateAssetFilterResponse extends Response
{
}
