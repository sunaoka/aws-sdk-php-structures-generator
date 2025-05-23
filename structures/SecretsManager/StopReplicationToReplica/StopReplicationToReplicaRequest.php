<?php

namespace Sunaoka\Aws\Structures\SecretsManager\StopReplicationToReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 */
class StopReplicationToReplicaRequest extends Request
{
    /**
     * @param array{SecretId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
