<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkloadName
 * @property 'CUSTOM'|'DEFAULT'|'DOT_NET_CORE'|'DOT_NET_WORKER'|'DOT_NET_WEB_TIER'|'DOT_NET_WEB'|'SQL_SERVER'|'SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'|'MYSQL'|'POSTGRESQL'|'JAVA_JMX'|'ORACLE'|'SAP_HANA_MULTI_NODE'|'SAP_HANA_SINGLE_NODE'|'SAP_HANA_HIGH_AVAILABILITY'|'SAP_ASE_SINGLE_NODE'|'SAP_ASE_HIGH_AVAILABILITY'|'SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'|'SHAREPOINT'|'ACTIVE_DIRECTORY'|'SAP_NETWEAVER_STANDARD'|'SAP_NETWEAVER_DISTRIBUTED'|'SAP_NETWEAVER_HIGH_AVAILABILITY'|null $Tier
 * @property string|null $Configuration
 */
class WorkloadConfiguration extends Shape
{
    /**
     * @param array{
     *     WorkloadName?: string|null,
     *     Tier?: 'CUSTOM'|'DEFAULT'|'DOT_NET_CORE'|'DOT_NET_WORKER'|'DOT_NET_WEB_TIER'|'DOT_NET_WEB'|'SQL_SERVER'|'SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'|'MYSQL'|'POSTGRESQL'|'JAVA_JMX'|'ORACLE'|'SAP_HANA_MULTI_NODE'|'SAP_HANA_SINGLE_NODE'|'SAP_HANA_HIGH_AVAILABILITY'|'SAP_ASE_SINGLE_NODE'|'SAP_ASE_HIGH_AVAILABILITY'|'SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'|'SHAREPOINT'|'ACTIVE_DIRECTORY'|'SAP_NETWEAVER_STANDARD'|'SAP_NETWEAVER_DISTRIBUTED'|'SAP_NETWEAVER_HIGH_AVAILABILITY'|null,
     *     Configuration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
