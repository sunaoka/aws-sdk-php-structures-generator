<?php

namespace Sunaoka\Aws\Structures\S3\GetObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $Body
 * @property bool|null $DeleteMarker
 * @property string|null $AcceptRanges
 * @property string|null $Expiration
 * @property string|null $Restore
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property int|null $ContentLength
 * @property string|null $ETag
 * @property string|null $ChecksumCRC32
 * @property string|null $ChecksumCRC32C
 * @property string|null $ChecksumCRC64NVME
 * @property string|null $ChecksumSHA1
 * @property string|null $ChecksumSHA256
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 * @property int|null $MissingMeta
 * @property string|null $VersionId
 * @property string|null $CacheControl
 * @property string|null $ContentDisposition
 * @property string|null $ContentEncoding
 * @property string|null $ContentLanguage
 * @property string|null $ContentRange
 * @property string|null $ContentType
 * @property \Aws\Api\DateTimeResult|null $Expires
 * @property string|null $WebsiteRedirectLocation
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse'|null $ServerSideEncryption
 * @property array<string, string>|null $Metadata
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKeyMD5
 * @property string|null $SSEKMSKeyId
 * @property bool|null $BucketKeyEnabled
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|null $StorageClass
 * @property 'requester'|null $RequestCharged
 * @property 'COMPLETE'|'PENDING'|'FAILED'|'REPLICA'|'COMPLETED'|null $ReplicationStatus
 * @property int|null $PartsCount
 * @property int|null $TagCount
 * @property 'GOVERNANCE'|'COMPLIANCE'|null $ObjectLockMode
 * @property \Aws\Api\DateTimeResult|null $ObjectLockRetainUntilDate
 * @property 'ON'|'OFF'|null $ObjectLockLegalHoldStatus
 */
class GetObjectResponse extends Response
{
}
