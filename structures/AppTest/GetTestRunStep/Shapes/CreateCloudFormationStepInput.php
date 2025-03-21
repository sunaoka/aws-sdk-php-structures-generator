<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateLocation
 * @property array<string, string>|null $parameters
 */
class CreateCloudFormationStepInput extends Shape
{
    /**
     * @param array{
     *     templateLocation: string,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
