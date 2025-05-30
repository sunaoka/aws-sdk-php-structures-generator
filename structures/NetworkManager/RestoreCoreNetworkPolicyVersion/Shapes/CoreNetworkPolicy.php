<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RestoreCoreNetworkPolicyVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property int|null $PolicyVersionId
 * @property 'LIVE'|'LATEST'|null $Alias
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'PENDING_GENERATION'|'FAILED_GENERATION'|'READY_TO_EXECUTE'|'EXECUTING'|'EXECUTION_SUCCEEDED'|'OUT_OF_DATE'|null $ChangeSetState
 * @property list<CoreNetworkPolicyError>|null $PolicyErrors
 * @property string|null $PolicyDocument
 */
class CoreNetworkPolicy extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     PolicyVersionId?: int|null,
     *     Alias?: 'LIVE'|'LATEST'|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ChangeSetState?: 'PENDING_GENERATION'|'FAILED_GENERATION'|'READY_TO_EXECUTE'|'EXECUTING'|'EXECUTION_SUCCEEDED'|'OUT_OF_DATE'|null,
     *     PolicyErrors?: list<CoreNetworkPolicyError>|null,
     *     PolicyDocument?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
