<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\DeleteServiceQuotaIncreaseRequestFromTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $QuotaCode
 * @property string $AwsRegion
 */
class DeleteServiceQuotaIncreaseRequestFromTemplateRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     QuotaCode: string,
     *     AwsRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
