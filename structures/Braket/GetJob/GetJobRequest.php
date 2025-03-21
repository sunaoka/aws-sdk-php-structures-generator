<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'QueueInfo'>|null $additionalAttributeNames
 * @property string $jobArn
 */
class GetJobRequest extends Request
{
    /**
     * @param array{
     *     additionalAttributeNames?: list<'QueueInfo'>|null,
     *     jobArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
