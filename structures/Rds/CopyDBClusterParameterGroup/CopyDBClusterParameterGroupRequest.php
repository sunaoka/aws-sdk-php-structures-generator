<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBClusterParameterGroupIdentifier
 * @property string $TargetDBClusterParameterGroupIdentifier
 * @property string $TargetDBClusterParameterGroupDescription
 * @property list<Shapes\Tag>|null $Tags
 */
class CopyDBClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     SourceDBClusterParameterGroupIdentifier: string,
     *     TargetDBClusterParameterGroupIdentifier: string,
     *     TargetDBClusterParameterGroupDescription: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
