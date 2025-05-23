<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpgradeAppliedSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PublishedSchemaArn
 * @property string $DirectoryArn
 * @property bool|null $DryRun
 */
class UpgradeAppliedSchemaRequest extends Request
{
    /**
     * @param array{
     *     PublishedSchemaArn: string,
     *     DirectoryArn: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
