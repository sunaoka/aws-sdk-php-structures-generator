<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Salesforce'|'Marketo'|'Zendesk'|'Servicenow'|'S3' $SourceConnectorType
 * @property string $ConnectorProfileName
 * @property string|null $RoleArn
 */
class AppflowIntegrationWorkflowAttributes extends Shape
{
    /**
     * @param array{
     *     SourceConnectorType: 'Salesforce'|'Marketo'|'Zendesk'|'Servicenow'|'S3',
     *     ConnectorProfileName: string,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
