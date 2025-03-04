<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainingDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $databaseName
 * @property string|null $catalogId
 */
class GlueDataSource extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     databaseName: string,
     *     catalogId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
