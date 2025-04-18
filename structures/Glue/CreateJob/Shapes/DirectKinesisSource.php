<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int<0, max>|null $WindowSize
 * @property bool|null $DetectSchema
 * @property KinesisStreamingSourceOptions|null $StreamingOptions
 * @property StreamingDataPreviewOptions|null $DataPreviewOptions
 */
class DirectKinesisSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     WindowSize?: int<0, max>|null,
     *     DetectSchema?: bool|null,
     *     StreamingOptions?: KinesisStreamingSourceOptions|null,
     *     DataPreviewOptions?: StreamingDataPreviewOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
