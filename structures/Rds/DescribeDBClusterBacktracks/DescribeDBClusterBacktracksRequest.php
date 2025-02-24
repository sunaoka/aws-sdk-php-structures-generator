<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterBacktracks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string|null $BacktrackIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBClusterBacktracksRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     BacktrackIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
