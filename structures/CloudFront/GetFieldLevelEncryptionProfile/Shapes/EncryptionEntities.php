<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<EncryptionEntity>|null $Items
 */
class EncryptionEntities extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<EncryptionEntity>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
