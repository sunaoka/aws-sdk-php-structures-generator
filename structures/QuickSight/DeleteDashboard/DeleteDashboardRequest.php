<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property int<1, max>|null $VersionNumber
 */
class DeleteDashboardRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     VersionNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
