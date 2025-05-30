<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeInboundIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationArn
 * @property 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION' $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property IntegrationConfig|null $IntegrationConfig
 * @property list<IntegrationError>|null $Errors
 */
class InboundIntegration extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     TargetArn: string,
     *     IntegrationArn: string,
     *     Status: 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION',
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     IntegrationConfig?: IntegrationConfig|null,
     *     Errors?: list<IntegrationError>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
