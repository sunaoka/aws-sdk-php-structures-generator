<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<'Name'> $Properties
 */
class AssetBundleExportJobThemeOverrideProperties extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Properties: list<'Name'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
