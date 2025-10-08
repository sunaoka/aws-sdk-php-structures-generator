<?php

namespace Sunaoka\Aws\Structures\BCMRecommendedActions\ListRecommendedActions;

trait ListRecommendedActionsTrait
{
    /**
     * @param ListRecommendedActionsRequest $args
     * @return ListRecommendedActionsResponse
     */
    public function listRecommendedActions(ListRecommendedActionsRequest $args)
    {
        $result = parent::listRecommendedActions($args->toArray());
        return new ListRecommendedActionsResponse($result->toArray());
    }
}
