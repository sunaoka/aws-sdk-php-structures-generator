<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries;

trait ListScheduledQueriesTrait
{
    /**
     * @param ListScheduledQueriesRequest $args
     * @return ListScheduledQueriesResponse
     */
    public function listScheduledQueries(ListScheduledQueriesRequest $args)
    {
        $result = parent::listScheduledQueries($args->toArray());
        return new ListScheduledQueriesResponse($result->toArray());
    }
}
