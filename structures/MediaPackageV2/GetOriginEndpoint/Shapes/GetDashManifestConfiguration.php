<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $Url
 * @property int|null $ManifestWindowSeconds
 * @property FilterConfiguration|null $FilterConfiguration
 * @property int|null $MinUpdatePeriodSeconds
 * @property int|null $MinBufferTimeSeconds
 * @property int|null $SuggestedPresentationDelaySeconds
 * @property 'NUMBER_WITH_TIMELINE'|null $SegmentTemplateFormat
 * @property list<'AVAILS'|'DRM_KEY_ROTATION'|'SOURCE_CHANGES'|'SOURCE_DISRUPTIONS'|'NONE'>|null $PeriodTriggers
 * @property ScteDash|null $ScteDash
 * @property 'INDIVIDUAL'|'REFERENCED'|null $DrmSignaling
 * @property DashUtcTiming|null $UtcTiming
 * @property list<'DVB_DASH'>|null $Profiles
 * @property list<DashBaseUrl>|null $BaseUrls
 * @property DashProgramInformation|null $ProgramInformation
 * @property DashDvbSettings|null $DvbSettings
 * @property 'STANDARD'|'NONE'|null $Compactness
 * @property DashSubtitleConfiguration|null $SubtitleConfiguration
 */
class GetDashManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     Url: string,
     *     ManifestWindowSeconds?: int|null,
     *     FilterConfiguration?: FilterConfiguration|null,
     *     MinUpdatePeriodSeconds?: int|null,
     *     MinBufferTimeSeconds?: int|null,
     *     SuggestedPresentationDelaySeconds?: int|null,
     *     SegmentTemplateFormat?: 'NUMBER_WITH_TIMELINE'|null,
     *     PeriodTriggers?: list<'AVAILS'|'DRM_KEY_ROTATION'|'SOURCE_CHANGES'|'SOURCE_DISRUPTIONS'|'NONE'>|null,
     *     ScteDash?: ScteDash|null,
     *     DrmSignaling?: 'INDIVIDUAL'|'REFERENCED'|null,
     *     UtcTiming?: DashUtcTiming|null,
     *     Profiles?: list<'DVB_DASH'>|null,
     *     BaseUrls?: list<DashBaseUrl>|null,
     *     ProgramInformation?: DashProgramInformation|null,
     *     DvbSettings?: DashDvbSettings|null,
     *     Compactness?: 'STANDARD'|'NONE'|null,
     *     SubtitleConfiguration?: DashSubtitleConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
