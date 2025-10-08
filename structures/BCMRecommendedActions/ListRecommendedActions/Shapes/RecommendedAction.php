<?php

namespace Sunaoka\Aws\Structures\BCMRecommendedActions\ListRecommendedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'ADD_ALTERNATE_BILLING_CONTACT'|'CREATE_ANOMALY_MONITOR'|'CREATE_BUDGET'|'ENABLE_COST_OPTIMIZATION_HUB'|'MIGRATE_TO_GRANULAR_PERMISSIONS'|'PAYMENTS_DUE'|'PAYMENTS_PAST_DUE'|'REVIEW_ANOMALIES'|'REVIEW_BUDGET_ALERTS'|'REVIEW_BUDGETS_EXCEEDED'|'REVIEW_EXPIRING_RI'|'REVIEW_EXPIRING_SP'|'REVIEW_FREETIER_USAGE_ALERTS'|'REVIEW_SAVINGS_OPPORTUNITY_RECOMMENDATIONS'|'UPDATE_EXPIRED_PAYMENT_METHOD'|'UPDATE_INVALID_PAYMENT_METHOD'|'UPDATE_TAX_EXEMPTION_CERTIFICATE'|'UPDATE_TAX_REGISTRATION_NUMBER'|null $type
 * @property string|null $accountId
 * @property 'INFO'|'WARNING'|'CRITICAL'|null $severity
 * @property 'ACCOUNT'|'BUDGETS'|'COST_ANOMALY_DETECTION'|'COST_OPTIMIZATION_HUB'|'FREE_TIER'|'IAM'|'PAYMENTS'|'RESERVATIONS'|'SAVINGS_PLANS'|'TAX_SETTINGS'|null $feature
 * @property array<string, string>|null $context
 * @property list<string>|null $nextSteps
 * @property string|null $lastUpdatedTimeStamp
 */
class RecommendedAction extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     type?: 'ADD_ALTERNATE_BILLING_CONTACT'|'CREATE_ANOMALY_MONITOR'|'CREATE_BUDGET'|'ENABLE_COST_OPTIMIZATION_HUB'|'MIGRATE_TO_GRANULAR_PERMISSIONS'|'PAYMENTS_DUE'|'PAYMENTS_PAST_DUE'|'REVIEW_ANOMALIES'|'REVIEW_BUDGET_ALERTS'|'REVIEW_BUDGETS_EXCEEDED'|'REVIEW_EXPIRING_RI'|'REVIEW_EXPIRING_SP'|'REVIEW_FREETIER_USAGE_ALERTS'|'REVIEW_SAVINGS_OPPORTUNITY_RECOMMENDATIONS'|'UPDATE_EXPIRED_PAYMENT_METHOD'|'UPDATE_INVALID_PAYMENT_METHOD'|'UPDATE_TAX_EXEMPTION_CERTIFICATE'|'UPDATE_TAX_REGISTRATION_NUMBER'|null,
     *     accountId?: string|null,
     *     severity?: 'INFO'|'WARNING'|'CRITICAL'|null,
     *     feature?: 'ACCOUNT'|'BUDGETS'|'COST_ANOMALY_DETECTION'|'COST_OPTIMIZATION_HUB'|'FREE_TIER'|'IAM'|'PAYMENTS'|'RESERVATIONS'|'SAVINGS_PLANS'|'TAX_SETTINGS'|null,
     *     context?: array<string, string>|null,
     *     nextSteps?: list<string>|null,
     *     lastUpdatedTimeStamp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
