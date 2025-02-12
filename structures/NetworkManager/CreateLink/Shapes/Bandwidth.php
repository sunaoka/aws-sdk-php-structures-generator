<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $UploadSpeed
 * @property int|null $DownloadSpeed
 */
class Bandwidth extends Shape
{
    /**
     * @param array{
     *     UploadSpeed?: int|null,
     *     DownloadSpeed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
