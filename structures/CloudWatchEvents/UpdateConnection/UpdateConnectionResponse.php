<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConnectionArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|null $ConnectionState
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $LastAuthorizedTime
 */
class UpdateConnectionResponse extends Response
{
}
