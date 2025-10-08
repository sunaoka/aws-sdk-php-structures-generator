<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListTagsForResource;

trait ListTagsForResourceTrait
{
    /**
     * @param ListTagsForResourceRequest $args
     * @return ListTagsForResourceResponse
     */
    public function listTagsForResource(ListTagsForResourceRequest $args)
    {
        $result = parent::listTagsForResource($args->toArray());
        return new ListTagsForResourceResponse($result->toArray());
    }
}
