<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUpdatePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhoneNumberId
 * @property 'BadRequest'|'Conflict'|'Forbidden'|'NotFound'|'PreconditionFailed'|'ResourceLimitExceeded'|'ServiceFailure'|'AccessDenied'|'ServiceUnavailable'|'Throttled'|'Throttling'|'Unauthorized'|'Unprocessable'|'VoiceConnectorGroupAssociationsExist'|'PhoneNumberAssociationsExist'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class PhoneNumberError extends Shape
{
    /**
     * @param array{
     *     PhoneNumberId?: string|null,
     *     ErrorCode?: 'BadRequest'|'Conflict'|'Forbidden'|'NotFound'|'PreconditionFailed'|'ResourceLimitExceeded'|'ServiceFailure'|'AccessDenied'|'ServiceUnavailable'|'Throttled'|'Throttling'|'Unauthorized'|'Unprocessable'|'VoiceConnectorGroupAssociationsExist'|'PhoneNumberAssociationsExist'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
