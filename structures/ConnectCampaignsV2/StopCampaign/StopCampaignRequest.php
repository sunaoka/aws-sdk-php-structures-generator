<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\StopCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StopCampaignRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
