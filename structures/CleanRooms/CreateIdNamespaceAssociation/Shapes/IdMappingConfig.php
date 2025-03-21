<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdNamespaceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowUseAsDimensionColumn
 */
class IdMappingConfig extends Shape
{
    /**
     * @param array{allowUseAsDimensionColumn: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
