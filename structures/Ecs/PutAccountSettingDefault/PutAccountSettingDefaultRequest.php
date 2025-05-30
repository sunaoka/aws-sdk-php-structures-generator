<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAccountSettingDefault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate'|'defaultLogDriverMode' $name
 * @property string $value
 */
class PutAccountSettingDefaultRequest extends Request
{
    /**
     * @param array{
     *     name: 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate'|'defaultLogDriverMode',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
