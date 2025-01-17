<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\CreateExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Export $Export
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 */
class CreateExportRequest extends Request
{
    /**
     * @param array{
     *     Export: Shapes\Export,
     *     ResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
