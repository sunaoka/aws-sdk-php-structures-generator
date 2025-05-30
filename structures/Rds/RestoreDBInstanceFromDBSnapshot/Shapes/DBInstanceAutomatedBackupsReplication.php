<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromDBSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceAutomatedBackupsArn
 */
class DBInstanceAutomatedBackupsReplication extends Shape
{
    /**
     * @param array{DBInstanceAutomatedBackupsArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
