<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashPlaylistSettings|null $DashPlaylistSettings
 * @property HlsPlaylistSettings|null $HlsPlaylistSettings
 * @property string $ManifestName
 * @property string $SourceGroup
 */
class RequestOutputItem extends Shape
{
    /**
     * @param array{
     *     DashPlaylistSettings?: DashPlaylistSettings|null,
     *     HlsPlaylistSettings?: HlsPlaylistSettings|null,
     *     ManifestName: string,
     *     SourceGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
