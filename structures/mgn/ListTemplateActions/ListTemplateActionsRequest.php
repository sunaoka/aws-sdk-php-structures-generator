<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TemplateActionsRequestFilters|null $filters
 * @property string $launchConfigurationTemplateID
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListTemplateActionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\TemplateActionsRequestFilters|null,
     *     launchConfigurationTemplateID: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
