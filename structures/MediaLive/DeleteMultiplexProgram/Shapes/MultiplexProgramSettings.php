<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CURRENTLY_ACTIVE'|'PIPELINE_0'|'PIPELINE_1'|null $PreferredChannelPipeline
 * @property int<0, 65535> $ProgramNumber
 * @property MultiplexProgramServiceDescriptor|null $ServiceDescriptor
 * @property MultiplexVideoSettings|null $VideoSettings
 */
class MultiplexProgramSettings extends Shape
{
    /**
     * @param array{
     *     PreferredChannelPipeline?: 'CURRENTLY_ACTIVE'|'PIPELINE_0'|'PIPELINE_1'|null,
     *     ProgramNumber: int<0, 65535>,
     *     ServiceDescriptor?: MultiplexProgramServiceDescriptor|null,
     *     VideoSettings?: MultiplexVideoSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
