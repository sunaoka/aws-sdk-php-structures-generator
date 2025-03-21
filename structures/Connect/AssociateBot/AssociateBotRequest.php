<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\LexBot|null $LexBot
 * @property Shapes\LexV2Bot|null $LexV2Bot
 * @property string|null $ClientToken
 */
class AssociateBotRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LexBot?: Shapes\LexBot|null,
     *     LexV2Bot?: Shapes\LexV2Bot|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
