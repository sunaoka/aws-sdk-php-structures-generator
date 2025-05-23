<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupArn
 */
class ExperimentTemplateCloudWatchLogsLogConfigurationInput extends Shape
{
    /**
     * @param array{logGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
