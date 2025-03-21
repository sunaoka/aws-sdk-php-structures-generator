<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftServerlessAuthConfiguration $authConfiguration
 * @property string $workgroupArn
 */
class RedshiftServerlessConfiguration extends Shape
{
    /**
     * @param array{
     *     authConfiguration: RedshiftServerlessAuthConfiguration,
     *     workgroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
