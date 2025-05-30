<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\DeleteVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteVectorEnrichmentJobRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
