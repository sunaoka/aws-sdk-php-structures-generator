<?php

namespace Sunaoka\Aws\Structures\Batch\TerminateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $reason
 */
class TerminateJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
