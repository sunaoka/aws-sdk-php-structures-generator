<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION' $assetType
 */
class GetAutomatedReasoningPolicyBuildWorkflowResultAssetsRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     assetType: 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
