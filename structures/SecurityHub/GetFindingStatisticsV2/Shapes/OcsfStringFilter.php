<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'metadata.uid'|'activity_name'|'cloud.account.uid'|'cloud.provider'|'cloud.region'|'compliance.assessments.category'|'compliance.assessments.name'|'compliance.control'|'compliance.status'|'compliance.standards'|'finding_info.desc'|'finding_info.src_url'|'finding_info.title'|'finding_info.types'|'finding_info.uid'|'finding_info.related_events.uid'|'finding_info.related_events.product.uid'|'finding_info.related_events.title'|'metadata.product.name'|'metadata.product.uid'|'metadata.product.vendor_name'|'remediation.desc'|'remediation.references'|'resources.cloud_partition'|'resources.region'|'resources.type'|'resources.uid'|'severity'|'status'|'comment'|'vulnerabilities.fix_coverage'|'class_name'|'databucket.encryption_details.algorithm'|'databucket.encryption_details.key_uid'|'databucket.file.data_classifications.classifier_details.type'|'evidences.actor.user.account.uid'|'evidences.api.operation'|'evidences.api.response.error_message'|'evidences.api.service.name'|'evidences.connection_info.direction'|'evidences.connection_info.protocol_name'|'evidences.dst_endpoint.autonomous_system.name'|'evidences.dst_endpoint.location.city'|'evidences.dst_endpoint.location.country'|'evidences.src_endpoint.autonomous_system.name'|'evidences.src_endpoint.hostname'|'evidences.src_endpoint.location.city'|'evidences.src_endpoint.location.country'|'finding_info.analytic.name'|'malware.name'|'malware_scan_info.uid'|'malware.severity'|'resources.cloud_function.layers.uid_alt'|'resources.cloud_function.runtime'|'resources.cloud_function.user.uid'|'resources.device.encryption_details.key_uid'|'resources.device.image.uid'|'resources.image.architecture'|'resources.image.registry_uid'|'resources.image.repository_name'|'resources.image.uid'|'resources.subnet_info.uid'|'resources.vpc_uid'|'vulnerabilities.affected_code.file.path'|'vulnerabilities.affected_packages.name'|'vulnerabilities.cve.epss.score'|'vulnerabilities.cve.uid'|'vulnerabilities.related_vulnerabilities'|'cloud.account.name'|null $FieldName
 * @property StringFilter|null $Filter
 */
class OcsfStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'metadata.uid'|'activity_name'|'cloud.account.uid'|'cloud.provider'|'cloud.region'|'compliance.assessments.category'|'compliance.assessments.name'|'compliance.control'|'compliance.status'|'compliance.standards'|'finding_info.desc'|'finding_info.src_url'|'finding_info.title'|'finding_info.types'|'finding_info.uid'|'finding_info.related_events.uid'|'finding_info.related_events.product.uid'|'finding_info.related_events.title'|'metadata.product.name'|'metadata.product.uid'|'metadata.product.vendor_name'|'remediation.desc'|'remediation.references'|'resources.cloud_partition'|'resources.region'|'resources.type'|'resources.uid'|'severity'|'status'|'comment'|'vulnerabilities.fix_coverage'|'class_name'|'databucket.encryption_details.algorithm'|'databucket.encryption_details.key_uid'|'databucket.file.data_classifications.classifier_details.type'|'evidences.actor.user.account.uid'|'evidences.api.operation'|'evidences.api.response.error_message'|'evidences.api.service.name'|'evidences.connection_info.direction'|'evidences.connection_info.protocol_name'|'evidences.dst_endpoint.autonomous_system.name'|'evidences.dst_endpoint.location.city'|'evidences.dst_endpoint.location.country'|'evidences.src_endpoint.autonomous_system.name'|'evidences.src_endpoint.hostname'|'evidences.src_endpoint.location.city'|'evidences.src_endpoint.location.country'|'finding_info.analytic.name'|'malware.name'|'malware_scan_info.uid'|'malware.severity'|'resources.cloud_function.layers.uid_alt'|'resources.cloud_function.runtime'|'resources.cloud_function.user.uid'|'resources.device.encryption_details.key_uid'|'resources.device.image.uid'|'resources.image.architecture'|'resources.image.registry_uid'|'resources.image.repository_name'|'resources.image.uid'|'resources.subnet_info.uid'|'resources.vpc_uid'|'vulnerabilities.affected_code.file.path'|'vulnerabilities.affected_packages.name'|'vulnerabilities.cve.epss.score'|'vulnerabilities.cve.uid'|'vulnerabilities.related_vulnerabilities'|'cloud.account.name'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
