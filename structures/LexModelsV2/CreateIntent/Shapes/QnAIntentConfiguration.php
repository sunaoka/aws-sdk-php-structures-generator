<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceConfiguration|null $dataSourceConfiguration
 * @property BedrockModelSpecification|null $bedrockModelConfiguration
 */
class QnAIntentConfiguration extends Shape
{
    /**
     * @param array{
     *     dataSourceConfiguration?: DataSourceConfiguration|null,
     *     bedrockModelConfiguration?: BedrockModelSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
