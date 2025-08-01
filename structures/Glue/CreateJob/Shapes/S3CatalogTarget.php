<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Table
 * @property string $Database
 * @property CatalogSchemaChangePolicy|null $SchemaChangePolicy
 * @property AutoDataQuality|null $AutoDataQuality
 */
class S3CatalogTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>|null,
     *     Table: string,
     *     Database: string,
     *     SchemaChangePolicy?: CatalogSchemaChangePolicy|null,
     *     AutoDataQuality?: AutoDataQuality|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
