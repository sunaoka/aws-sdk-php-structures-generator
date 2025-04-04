<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InsightId
 * @property list<Shapes\AnomalousLogGroup> $AnomalousLogGroups
 * @property string|null $NextToken
 */
class ListAnomalousLogGroupsResponse extends Response
{
}
