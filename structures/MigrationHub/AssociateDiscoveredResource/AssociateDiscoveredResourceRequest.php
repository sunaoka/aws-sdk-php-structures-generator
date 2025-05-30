<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateDiscoveredResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property Shapes\DiscoveredResource $DiscoveredResource
 * @property bool|null $DryRun
 */
class AssociateDiscoveredResourceRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     DiscoveredResource: Shapes\DiscoveredResource,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
