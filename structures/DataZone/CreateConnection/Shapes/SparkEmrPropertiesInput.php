<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $computeArn
 * @property string|null $instanceProfileArn
 * @property string|null $javaVirtualEnv
 * @property string|null $logUri
 * @property string|null $pythonVirtualEnv
 * @property string|null $runtimeRole
 * @property string|null $trustedCertificatesS3Uri
 */
class SparkEmrPropertiesInput extends Shape
{
    /**
     * @param array{
     *     computeArn?: string|null,
     *     instanceProfileArn?: string|null,
     *     javaVirtualEnv?: string|null,
     *     logUri?: string|null,
     *     pythonVirtualEnv?: string|null,
     *     runtimeRole?: string|null,
     *     trustedCertificatesS3Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
