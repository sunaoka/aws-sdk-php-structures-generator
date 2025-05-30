<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossaryTerm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string|null $longDescription
 * @property string $name
 * @property string|null $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property Shapes\TermRelations|null $termRelations
 */
class UpdateGlossaryTermResponse extends Response
{
}
