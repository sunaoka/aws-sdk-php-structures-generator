<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NotebookInstanceArn
 * @property string|null $NotebookInstanceName
 * @property 'Pending'|'InService'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Updating'|null $NotebookInstanceStatus
 * @property string|null $FailureReason
 * @property string|null $Url
 * @property 'ml.t2.medium'|'ml.t2.large'|'ml.t2.xlarge'|'ml.t2.2xlarge'|'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|'ml.m4.xlarge'|'ml.m4.2xlarge'|'ml.m4.4xlarge'|'ml.m4.10xlarge'|'ml.m4.16xlarge'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.12xlarge'|'ml.m5.24xlarge'|'ml.m5d.large'|'ml.m5d.xlarge'|'ml.m5d.2xlarge'|'ml.m5d.4xlarge'|'ml.m5d.8xlarge'|'ml.m5d.12xlarge'|'ml.m5d.16xlarge'|'ml.m5d.24xlarge'|'ml.c4.xlarge'|'ml.c4.2xlarge'|'ml.c4.4xlarge'|'ml.c4.8xlarge'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.18xlarge'|'ml.c5d.xlarge'|'ml.c5d.2xlarge'|'ml.c5d.4xlarge'|'ml.c5d.9xlarge'|'ml.c5d.18xlarge'|'ml.p2.xlarge'|'ml.p2.8xlarge'|'ml.p2.16xlarge'|'ml.p3.2xlarge'|'ml.p3.8xlarge'|'ml.p3.16xlarge'|'ml.p3dn.24xlarge'|'ml.g4dn.xlarge'|'ml.g4dn.2xlarge'|'ml.g4dn.4xlarge'|'ml.g4dn.8xlarge'|'ml.g4dn.12xlarge'|'ml.g4dn.16xlarge'|'ml.r5.large'|'ml.r5.xlarge'|'ml.r5.2xlarge'|'ml.r5.4xlarge'|'ml.r5.8xlarge'|'ml.r5.12xlarge'|'ml.r5.16xlarge'|'ml.r5.24xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.16xlarge'|'ml.g5.12xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.inf1.xlarge'|'ml.inf1.2xlarge'|'ml.inf1.6xlarge'|'ml.inf1.24xlarge'|'ml.trn1.2xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge'|'ml.inf2.xlarge'|'ml.inf2.8xlarge'|'ml.inf2.24xlarge'|'ml.inf2.48xlarge'|'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.p6-b200.48xlarge'|'ml.m6i.large'|'ml.m6i.xlarge'|'ml.m6i.2xlarge'|'ml.m6i.4xlarge'|'ml.m6i.8xlarge'|'ml.m6i.12xlarge'|'ml.m6i.16xlarge'|'ml.m6i.24xlarge'|'ml.m6i.32xlarge'|'ml.m7i.large'|'ml.m7i.xlarge'|'ml.m7i.2xlarge'|'ml.m7i.4xlarge'|'ml.m7i.8xlarge'|'ml.m7i.12xlarge'|'ml.m7i.16xlarge'|'ml.m7i.24xlarge'|'ml.m7i.48xlarge'|'ml.c6i.large'|'ml.c6i.xlarge'|'ml.c6i.2xlarge'|'ml.c6i.4xlarge'|'ml.c6i.8xlarge'|'ml.c6i.12xlarge'|'ml.c6i.16xlarge'|'ml.c6i.24xlarge'|'ml.c6i.32xlarge'|'ml.c7i.large'|'ml.c7i.xlarge'|'ml.c7i.2xlarge'|'ml.c7i.4xlarge'|'ml.c7i.8xlarge'|'ml.c7i.12xlarge'|'ml.c7i.16xlarge'|'ml.c7i.24xlarge'|'ml.c7i.48xlarge'|'ml.r6i.large'|'ml.r6i.xlarge'|'ml.r6i.2xlarge'|'ml.r6i.4xlarge'|'ml.r6i.8xlarge'|'ml.r6i.12xlarge'|'ml.r6i.16xlarge'|'ml.r6i.24xlarge'|'ml.r6i.32xlarge'|'ml.r7i.large'|'ml.r7i.xlarge'|'ml.r7i.2xlarge'|'ml.r7i.4xlarge'|'ml.r7i.8xlarge'|'ml.r7i.12xlarge'|'ml.r7i.16xlarge'|'ml.r7i.24xlarge'|'ml.r7i.48xlarge'|'ml.m6id.large'|'ml.m6id.xlarge'|'ml.m6id.2xlarge'|'ml.m6id.4xlarge'|'ml.m6id.8xlarge'|'ml.m6id.12xlarge'|'ml.m6id.16xlarge'|'ml.m6id.24xlarge'|'ml.m6id.32xlarge'|'ml.c6id.large'|'ml.c6id.xlarge'|'ml.c6id.2xlarge'|'ml.c6id.4xlarge'|'ml.c6id.8xlarge'|'ml.c6id.12xlarge'|'ml.c6id.16xlarge'|'ml.c6id.24xlarge'|'ml.c6id.32xlarge'|'ml.r6id.large'|'ml.r6id.xlarge'|'ml.r6id.2xlarge'|'ml.r6id.4xlarge'|'ml.r6id.8xlarge'|'ml.r6id.12xlarge'|'ml.r6id.16xlarge'|'ml.r6id.24xlarge'|'ml.r6id.32xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.12xlarge'|'ml.g6.16xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|null $InstanceType
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 * @property string|null $SubnetId
 * @property list<string>|null $SecurityGroups
 * @property string|null $RoleArn
 * @property string|null $KmsKeyId
 * @property string|null $NetworkInterfaceId
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $NotebookInstanceLifecycleConfigName
 * @property 'Enabled'|'Disabled'|null $DirectInternetAccess
 * @property int<5, 16384>|null $VolumeSizeInGB
 * @property list<'ml.eia1.medium'|'ml.eia1.large'|'ml.eia1.xlarge'|'ml.eia2.medium'|'ml.eia2.large'|'ml.eia2.xlarge'>|null $AcceleratorTypes
 * @property string|null $DefaultCodeRepository
 * @property list<string>|null $AdditionalCodeRepositories
 * @property 'Enabled'|'Disabled'|null $RootAccess
 * @property string|null $PlatformIdentifier
 * @property Shapes\InstanceMetadataServiceConfiguration|null $InstanceMetadataServiceConfiguration
 */
class DescribeNotebookInstanceResponse extends Response
{
}
