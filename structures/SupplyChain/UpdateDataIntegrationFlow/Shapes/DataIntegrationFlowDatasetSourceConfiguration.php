<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetIdentifier
 * @property DataIntegrationFlowDatasetOptions|null $options
 */
class DataIntegrationFlowDatasetSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     datasetIdentifier: string,
     *     options?: DataIntegrationFlowDatasetOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
