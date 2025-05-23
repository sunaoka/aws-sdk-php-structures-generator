<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>> $Actions
 * @property array<string, Shapes\Parameter>|null $Parameters
 * @property array<string, string>|null $Tags
 * @property int|null $LatestVersionNumber
 */
class CreateExtensionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Actions: array<'PRE_CREATE_HOSTED_CONFIGURATION_VERSION'|'PRE_START_DEPLOYMENT'|'AT_DEPLOYMENT_TICK'|'ON_DEPLOYMENT_START'|'ON_DEPLOYMENT_STEP'|'ON_DEPLOYMENT_BAKING'|'ON_DEPLOYMENT_COMPLETE'|'ON_DEPLOYMENT_ROLLED_BACK', list<Shapes\Action>>,
     *     Parameters?: array<string, Shapes\Parameter>|null,
     *     Tags?: array<string, string>|null,
     *     LatestVersionNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
