<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>|null $aiAgentConfiguration
 * @property string $assistantArn
 * @property string $assistantId
 * @property AssistantCapabilityConfiguration|null $capabilityConfiguration
 * @property string|null $description
 * @property AssistantIntegrationConfiguration|null $integrationConfiguration
 * @property string $name
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string>|null $tags
 * @property 'AGENT' $type
 */
class AssistantData extends Shape
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', AIAgentConfigurationData>|null,
     *     assistantArn: string,
     *     assistantId: string,
     *     capabilityConfiguration?: AssistantCapabilityConfiguration|null,
     *     description?: string|null,
     *     integrationConfiguration?: AssistantIntegrationConfiguration|null,
     *     name: string,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>|null,
     *     type: 'AGENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
