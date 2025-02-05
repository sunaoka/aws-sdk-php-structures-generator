<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateJobStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $JobId
 * @property 'Cancelled'|'Ready' $RequestedJobStatus
 * @property string|null $StatusUpdateReason
 */
class UpdateJobStatusRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     JobId: string,
     *     RequestedJobStatus: 'Cancelled'|'Ready',
     *     StatusUpdateReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
