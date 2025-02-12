<?php

namespace Sunaoka\Aws\Structures\Textract\DetectDocumentText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document $Document
 */
class DetectDocumentTextRequest extends Request
{
    /**
     * @param array{Document: Shapes\Document} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
