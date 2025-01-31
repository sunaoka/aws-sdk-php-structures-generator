<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\StartMaintenance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property list<Shapes\EngineAttribute>|null $EngineAttributes
 */
class StartMaintenanceRequest extends Request
{
    /**
     * @param array{
     *     ServerName: string,
     *     EngineAttributes?: list<Shapes\EngineAttribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
