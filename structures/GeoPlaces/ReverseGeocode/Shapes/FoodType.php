<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalizedName
 * @property string|null $Id
 * @property bool|null $Primary
 */
class FoodType extends Shape
{
    /**
     * @param array{
     *     LocalizedName: string,
     *     Id?: string|null,
     *     Primary?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
