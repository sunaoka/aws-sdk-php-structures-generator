<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteAccountSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate'|'defaultLogDriverMode'|null $name
 * @property string|null $value
 * @property string|null $principalArn
 * @property 'user'|'aws_managed'|null $type
 */
class Setting extends Shape
{
    /**
     * @param array{
     *     name?: 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate'|'defaultLogDriverMode'|null,
     *     value?: string|null,
     *     principalArn?: string|null,
     *     type?: 'user'|'aws_managed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
