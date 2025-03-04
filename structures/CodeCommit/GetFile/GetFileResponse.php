<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $commitId
 * @property string $blobId
 * @property string $filePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $fileMode
 * @property int $fileSize
 * @property \Psr\Http\Message\StreamInterface $fileContent
 */
class GetFileResponse extends Response
{
}
