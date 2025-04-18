<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property bool|null $skipResourceInUseCheck
 */
class DeleteBotRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     skipResourceInUseCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
