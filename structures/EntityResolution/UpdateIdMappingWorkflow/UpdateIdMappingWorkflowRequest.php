<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property string|null $description
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property string|null $roleArn
 */
class UpdateIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     description?: string|null,
     *     inputSourceConfig: list<Shapes\IdMappingWorkflowInputSource>,
     *     outputSourceConfig?: list<Shapes\IdMappingWorkflowOutputSource>|null,
     *     idMappingTechniques: Shapes\IdMappingTechniques,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
