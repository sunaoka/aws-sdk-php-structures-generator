<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property Shapes\DependencyConfig|null $DependencyConfig
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'ServiceOperation'|'CloudWatchMetric'|'ServiceDependency'>|null $MetricSourceTypes
 * @property bool|null $IncludeLinkedAccounts
 * @property string|null $SloOwnerAwsAccountId
 */
class ListServiceLevelObjectivesRequest extends Request
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     DependencyConfig?: Shapes\DependencyConfig|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     MetricSourceTypes?: list<'ServiceOperation'|'CloudWatchMetric'|'ServiceDependency'>|null,
     *     IncludeLinkedAccounts?: bool|null,
     *     SloOwnerAwsAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
