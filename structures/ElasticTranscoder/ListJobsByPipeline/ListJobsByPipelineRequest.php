<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineId
 * @property string|null $Ascending
 * @property string|null $PageToken
 */
class ListJobsByPipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineId: string,
     *     Ascending?: string|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
