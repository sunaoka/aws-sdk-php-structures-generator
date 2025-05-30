<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateApplicationFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetName
 * @property string $ApplicationArn
 */
class AssociateApplicationFleetRequest extends Request
{
    /**
     * @param array{
     *     FleetName: string,
     *     ApplicationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
