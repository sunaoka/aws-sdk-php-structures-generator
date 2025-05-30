<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGLE_PASS'|'MULTI_PASS'|null $QualityTuningLevel
 */
class AvcIntraUhdSettings extends Shape
{
    /**
     * @param array{QualityTuningLevel?: 'SINGLE_PASS'|'MULTI_PASS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
