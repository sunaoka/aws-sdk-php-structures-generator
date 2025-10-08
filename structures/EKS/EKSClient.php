<?php

namespace Sunaoka\Aws\Structures\EKS;

class EKSClient extends \Aws\EKS\EKSClient
{
    use AssociateAccessPolicy\AssociateAccessPolicyTrait;
    use AssociateEncryptionConfig\AssociateEncryptionConfigTrait;
    use AssociateIdentityProviderConfig\AssociateIdentityProviderConfigTrait;
    use CreateAccessEntry\CreateAccessEntryTrait;
    use CreateAddon\CreateAddonTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateEksAnywhereSubscription\CreateEksAnywhereSubscriptionTrait;
    use CreateFargateProfile\CreateFargateProfileTrait;
    use CreateNodegroup\CreateNodegroupTrait;
    use CreatePodIdentityAssociation\CreatePodIdentityAssociationTrait;
    use DeleteAccessEntry\DeleteAccessEntryTrait;
    use DeleteAddon\DeleteAddonTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteEksAnywhereSubscription\DeleteEksAnywhereSubscriptionTrait;
    use DeleteFargateProfile\DeleteFargateProfileTrait;
    use DeleteNodegroup\DeleteNodegroupTrait;
    use DeletePodIdentityAssociation\DeletePodIdentityAssociationTrait;
    use DeregisterCluster\DeregisterClusterTrait;
    use DescribeAccessEntry\DescribeAccessEntryTrait;
    use DescribeAddon\DescribeAddonTrait;
    use DescribeAddonConfiguration\DescribeAddonConfigurationTrait;
    use DescribeAddonVersions\DescribeAddonVersionsTrait;
    use DescribeCluster\DescribeClusterTrait;
    use DescribeClusterVersions\DescribeClusterVersionsTrait;
    use DescribeEksAnywhereSubscription\DescribeEksAnywhereSubscriptionTrait;
    use DescribeFargateProfile\DescribeFargateProfileTrait;
    use DescribeIdentityProviderConfig\DescribeIdentityProviderConfigTrait;
    use DescribeInsight\DescribeInsightTrait;
    use DescribeInsightsRefresh\DescribeInsightsRefreshTrait;
    use DescribeNodegroup\DescribeNodegroupTrait;
    use DescribePodIdentityAssociation\DescribePodIdentityAssociationTrait;
    use DescribeUpdate\DescribeUpdateTrait;
    use DisassociateAccessPolicy\DisassociateAccessPolicyTrait;
    use DisassociateIdentityProviderConfig\DisassociateIdentityProviderConfigTrait;
    use ListAccessEntries\ListAccessEntriesTrait;
    use ListAccessPolicies\ListAccessPoliciesTrait;
    use ListAddons\ListAddonsTrait;
    use ListAssociatedAccessPolicies\ListAssociatedAccessPoliciesTrait;
    use ListClusters\ListClustersTrait;
    use ListEksAnywhereSubscriptions\ListEksAnywhereSubscriptionsTrait;
    use ListFargateProfiles\ListFargateProfilesTrait;
    use ListIdentityProviderConfigs\ListIdentityProviderConfigsTrait;
    use ListInsights\ListInsightsTrait;
    use ListNodegroups\ListNodegroupsTrait;
    use ListPodIdentityAssociations\ListPodIdentityAssociationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListUpdates\ListUpdatesTrait;
    use RegisterCluster\RegisterClusterTrait;
    use StartInsightsRefresh\StartInsightsRefreshTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccessEntry\UpdateAccessEntryTrait;
    use UpdateAddon\UpdateAddonTrait;
    use UpdateClusterConfig\UpdateClusterConfigTrait;
    use UpdateClusterVersion\UpdateClusterVersionTrait;
    use UpdateEksAnywhereSubscription\UpdateEksAnywhereSubscriptionTrait;
    use UpdateNodegroupConfig\UpdateNodegroupConfigTrait;
    use UpdateNodegroupVersion\UpdateNodegroupVersionTrait;
    use UpdatePodIdentityAssociation\UpdatePodIdentityAssociationTrait;
}
