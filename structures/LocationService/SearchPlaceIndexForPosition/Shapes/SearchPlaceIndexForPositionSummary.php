<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Position
 * @property int<1, 50>|null $MaxResults
 * @property string $DataSource
 * @property string|null $Language
 */
class SearchPlaceIndexForPositionSummary extends Shape
{
    /**
     * @param array{
     *     Position: list<double>,
     *     MaxResults?: int<1, 50>|null,
     *     DataSource: string,
     *     Language?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
