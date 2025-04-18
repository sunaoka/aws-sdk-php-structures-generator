<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property bool|null $enhancedImageMetadataEnabled
 * @property string|null $imageRecipeArn
 * @property string|null $containerRecipeArn
 * @property string|null $infrastructureConfigurationArn
 * @property string|null $distributionConfigurationArn
 * @property ImageTestsConfiguration|null $imageTestsConfiguration
 * @property Schedule|null $schedule
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property string|null $dateLastRun
 * @property string|null $dateNextRun
 * @property array<string, string>|null $tags
 * @property ImageScanningConfiguration|null $imageScanningConfiguration
 * @property string|null $executionRole
 * @property list<WorkflowConfiguration>|null $workflows
 */
class ImagePipeline extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     enhancedImageMetadataEnabled?: bool|null,
     *     imageRecipeArn?: string|null,
     *     containerRecipeArn?: string|null,
     *     infrastructureConfigurationArn?: string|null,
     *     distributionConfigurationArn?: string|null,
     *     imageTestsConfiguration?: ImageTestsConfiguration|null,
     *     schedule?: Schedule|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     dateCreated?: string|null,
     *     dateUpdated?: string|null,
     *     dateLastRun?: string|null,
     *     dateNextRun?: string|null,
     *     tags?: array<string, string>|null,
     *     imageScanningConfiguration?: ImageScanningConfiguration|null,
     *     executionRole?: string|null,
     *     workflows?: list<WorkflowConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
