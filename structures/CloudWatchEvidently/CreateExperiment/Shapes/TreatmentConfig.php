<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $feature
 * @property string $name
 * @property string $variation
 */
class TreatmentConfig extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     feature: string,
     *     name: string,
     *     variation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
