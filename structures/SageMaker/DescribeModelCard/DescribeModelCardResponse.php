<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCard;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelCardArn
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 * @property string $Content
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 * @property Shapes\ModelCardSecurityConfig|null $SecurityConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property 'DeleteInProgress'|'DeletePending'|'ContentDeleted'|'ExportJobsDeleted'|'DeleteCompleted'|'DeleteFailed'|null $ModelCardProcessingStatus
 */
class DescribeModelCardResponse extends Response
{
}
