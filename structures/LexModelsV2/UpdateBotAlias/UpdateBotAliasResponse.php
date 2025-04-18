<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botAliasId
 * @property string|null $botAliasName
 * @property string|null $description
 * @property string|null $botVersion
 * @property array<string, Shapes\BotAliasLocaleSettings>|null $botAliasLocaleSettings
 * @property Shapes\ConversationLogSettings|null $conversationLogSettings
 * @property Shapes\SentimentAnalysisSettings|null $sentimentAnalysisSettings
 * @property 'Creating'|'Available'|'Deleting'|'Failed'|null $botAliasStatus
 * @property string|null $botId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class UpdateBotAliasResponse extends Response
{
}
