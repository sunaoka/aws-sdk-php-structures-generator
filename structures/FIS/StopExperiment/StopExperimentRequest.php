<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StopExperimentRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
