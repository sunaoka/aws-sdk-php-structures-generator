<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConflictMetadata $conflictMetadata
 * @property list<Shapes\MergeHunk> $mergeHunks
 * @property string|null $nextToken
 * @property string $destinationCommitId
 * @property string $sourceCommitId
 * @property string|null $baseCommitId
 */
class DescribeMergeConflictsResponse extends Response
{
}
