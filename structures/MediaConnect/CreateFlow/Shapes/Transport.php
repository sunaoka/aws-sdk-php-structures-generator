<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CidrAllowList
 * @property int|null $MaxBitrate
 * @property int|null $MaxLatency
 * @property int|null $MaxSyncBuffer
 * @property int|null $MinLatency
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq' $Protocol
 * @property string|null $RemoteId
 * @property int|null $SenderControlPort
 * @property string|null $SenderIpAddress
 * @property int|null $SmoothingLatency
 * @property string|null $SourceListenerAddress
 * @property int|null $SourceListenerPort
 * @property string|null $StreamId
 * @property int|null $NdiSpeedHqQuality
 * @property string|null $NdiProgramName
 */
class Transport extends Shape
{
    /**
     * @param array{
     *     CidrAllowList?: list<string>|null,
     *     MaxBitrate?: int|null,
     *     MaxLatency?: int|null,
     *     MaxSyncBuffer?: int|null,
     *     MinLatency?: int|null,
     *     Protocol: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq',
     *     RemoteId?: string|null,
     *     SenderControlPort?: int|null,
     *     SenderIpAddress?: string|null,
     *     SmoothingLatency?: int|null,
     *     SourceListenerAddress?: string|null,
     *     SourceListenerPort?: int|null,
     *     StreamId?: string|null,
     *     NdiSpeedHqQuality?: int|null,
     *     NdiProgramName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
