<?php

namespace Sunaoka\Aws\Structures\Glue\StartImportLabelsTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string $InputS3Path
 * @property bool|null $ReplaceAllLabels
 */
class StartImportLabelsTaskRunRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     InputS3Path: string,
     *     ReplaceAllLabels?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
