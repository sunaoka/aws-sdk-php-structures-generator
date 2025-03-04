<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property Shapes\SlateSource|null $FillerSlate
 * @property list<Shapes\RequestOutputItem> $Outputs
 * @property 'LOOP'|'LINEAR' $PlaybackMode
 * @property array<string, string>|null $Tags
 * @property 'BASIC'|'STANDARD'|null $Tier
 * @property Shapes\TimeShiftConfiguration|null $TimeShiftConfiguration
 * @property list<string>|null $Audiences
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     FillerSlate?: Shapes\SlateSource|null,
     *     Outputs: list<Shapes\RequestOutputItem>,
     *     PlaybackMode: 'LOOP'|'LINEAR',
     *     Tags?: array<string, string>|null,
     *     Tier?: 'BASIC'|'STANDARD'|null,
     *     TimeShiftConfiguration?: Shapes\TimeShiftConfiguration|null,
     *     Audiences?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
