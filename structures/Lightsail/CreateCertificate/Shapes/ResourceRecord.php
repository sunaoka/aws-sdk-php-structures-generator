<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $type
 * @property string|null $value
 */
class ResourceRecord extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
