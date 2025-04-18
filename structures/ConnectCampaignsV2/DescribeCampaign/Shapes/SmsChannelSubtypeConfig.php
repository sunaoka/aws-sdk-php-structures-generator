<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $capacity
 * @property SmsOutboundMode $outboundMode
 * @property SmsOutboundConfig $defaultOutboundConfig
 */
class SmsChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     capacity?: double|null,
     *     outboundMode: SmsOutboundMode,
     *     defaultOutboundConfig: SmsOutboundConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
