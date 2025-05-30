<?php

namespace Sunaoka\Aws\Structures\QApps\CreateQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $id
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property string|null $filename
 * @property string|null $fileId
 * @property bool|null $allowOverride
 */
class FileUploadCardInput extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     id: string,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input',
     *     filename?: string|null,
     *     fileId?: string|null,
     *     allowOverride?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
