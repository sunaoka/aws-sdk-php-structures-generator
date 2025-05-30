<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property string $Name
 * @property string $NetworkName
 * @property int $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq' $Protocol
 * @property int $Ttl
 */
class AddBridgeNetworkOutputRequest extends Shape
{
    /**
     * @param array{
     *     IpAddress: string,
     *     Name: string,
     *     NetworkName: string,
     *     Port: int,
     *     Protocol: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq',
     *     Ttl: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
