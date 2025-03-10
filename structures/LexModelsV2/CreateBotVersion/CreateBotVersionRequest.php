<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string|null $description
 * @property array<string, Shapes\BotVersionLocaleDetails> $botVersionLocaleSpecification
 */
class CreateBotVersionRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     description?: string|null,
     *     botVersionLocaleSpecification: array<string, Shapes\BotVersionLocaleDetails>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
