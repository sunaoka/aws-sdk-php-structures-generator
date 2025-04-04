<?php

namespace Sunaoka\Aws\Structures\Translate\StopTextTranslationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 */
class StopTextTranslationJobResponse extends Response
{
}
