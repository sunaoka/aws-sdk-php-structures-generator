<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCisScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanConfigurationArn
 * @property string|null $scanName
 * @property 'LEVEL_1'|'LEVEL_2'|null $securityLevel
 * @property Shapes\Schedule|null $schedule
 * @property Shapes\UpdateCisTargets|null $targets
 */
class UpdateCisScanConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scanConfigurationArn: string,
     *     scanName?: string|null,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2'|null,
     *     schedule?: Shapes\Schedule|null,
     *     targets?: Shapes\UpdateCisTargets|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
