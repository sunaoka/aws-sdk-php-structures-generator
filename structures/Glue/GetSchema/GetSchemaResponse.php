<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RegistryName
 * @property string|null $RegistryArn
 * @property string|null $SchemaName
 * @property string|null $SchemaArn
 * @property string|null $Description
 * @property 'AVRO'|'JSON'|'PROTOBUF'|null $DataFormat
 * @property 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL'|null $Compatibility
 * @property int<1, 100000>|null $SchemaCheckpoint
 * @property int<1, 100000>|null $LatestSchemaVersion
 * @property int<1, 100000>|null $NextSchemaVersion
 * @property 'AVAILABLE'|'PENDING'|'DELETING'|null $SchemaStatus
 * @property string|null $CreatedTime
 * @property string|null $UpdatedTime
 */
class GetSchemaResponse extends Response
{
}
