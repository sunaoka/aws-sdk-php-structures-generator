<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELF_SIGNED'|'VERIFY_AUTHENTICITY'|null $CertificateMode
 * @property int<1, max>|null $ConnectionRetryInterval
 * @property OutputLocationRef $Destination
 * @property int<0, max>|null $NumRetries
 */
class RtmpOutputSettings extends Shape
{
    /**
     * @param array{
     *     CertificateMode?: 'SELF_SIGNED'|'VERIFY_AUTHENTICITY'|null,
     *     ConnectionRetryInterval?: int<1, max>|null,
     *     Destination: OutputLocationRef,
     *     NumRetries?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
