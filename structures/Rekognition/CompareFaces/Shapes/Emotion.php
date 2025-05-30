<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAPPY'|'SAD'|'ANGRY'|'CONFUSED'|'DISGUSTED'|'SURPRISED'|'CALM'|'UNKNOWN'|'FEAR'|null $Type
 * @property float|null $Confidence
 */
class Emotion extends Shape
{
    /**
     * @param array{
     *     Type?: 'HAPPY'|'SAD'|'ANGRY'|'CONFUSED'|'DISGUSTED'|'SURPRISED'|'CALM'|'UNKNOWN'|'FEAR'|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
