<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DescribeSupportLevel;

trait DescribeSupportLevelTrait
{
    /**
     * @param DescribeSupportLevelRequest $args
     * @return DescribeSupportLevelResponse
     */
    public function describeSupportLevel(DescribeSupportLevelRequest $args)
    {
        $result = parent::describeSupportLevel($args->toArray());
        return new DescribeSupportLevelResponse($result->toArray());
    }
}
