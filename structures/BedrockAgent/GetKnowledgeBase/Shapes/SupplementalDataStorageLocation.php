<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $s3Location
 * @property 'S3' $type
 */
class SupplementalDataStorageLocation extends Shape
{
    /**
     * @param array{
     *     s3Location?: S3Location|null,
     *     type: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
