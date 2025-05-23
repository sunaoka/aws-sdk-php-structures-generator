<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageCriteriaInAllowedImagesSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ImageProviders
 */
class ImageCriterionRequest extends Shape
{
    /**
     * @param array{ImageProviders?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
