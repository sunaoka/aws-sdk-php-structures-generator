<?php

namespace Sunaoka\Aws\Structures\Kinesis\MergeShards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string $ShardToMerge
 * @property string $AdjacentShardToMerge
 * @property string|null $StreamARN
 */
class MergeShardsRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     ShardToMerge: string,
     *     AdjacentShardToMerge: string,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
