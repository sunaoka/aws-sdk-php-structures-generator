<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateThreatIntelSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $ThreatIntelSetId
 * @property string|null $Name
 * @property string|null $Location
 * @property bool|null $Activate
 * @property string|null $ExpectedBucketOwner
 */
class UpdateThreatIntelSetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     ThreatIntelSetId: string,
     *     Name?: string|null,
     *     Location?: string|null,
     *     Activate?: bool|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
