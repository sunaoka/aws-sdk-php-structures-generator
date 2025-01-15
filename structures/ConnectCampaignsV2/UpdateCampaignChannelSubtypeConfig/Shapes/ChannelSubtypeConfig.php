<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelephonyChannelSubtypeConfig|null $telephony
 * @property SmsChannelSubtypeConfig|null $sms
 * @property EmailChannelSubtypeConfig|null $email
 */
class ChannelSubtypeConfig extends Shape
{
    /**
     * @param array{
     *     telephony?: TelephonyChannelSubtypeConfig|null,
     *     sms?: SmsChannelSubtypeConfig|null,
     *     email?: EmailChannelSubtypeConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
