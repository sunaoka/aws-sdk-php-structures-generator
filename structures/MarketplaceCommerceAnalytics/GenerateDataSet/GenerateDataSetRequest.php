<?php

namespace Sunaoka\Aws\Structures\MarketplaceCommerceAnalytics\GenerateDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'customer_subscriber_hourly_monthly_subscriptions'|'customer_subscriber_annual_subscriptions'|'daily_business_usage_by_instance_type'|'daily_business_fees'|'daily_business_free_trial_conversions'|'daily_business_new_instances'|'daily_business_new_product_subscribers'|'daily_business_canceled_product_subscribers'|'monthly_revenue_billing_and_revenue_data'|'monthly_revenue_annual_subscriptions'|'monthly_revenue_field_demonstration_usage'|'monthly_revenue_flexible_payment_schedule'|'disbursed_amount_by_product'|'disbursed_amount_by_product_with_uncollected_funds'|'disbursed_amount_by_instance_hours'|'disbursed_amount_by_customer_geo'|'disbursed_amount_by_age_of_uncollected_funds'|'disbursed_amount_by_age_of_disbursed_funds'|'disbursed_amount_by_age_of_past_due_funds'|'disbursed_amount_by_uncollected_funds_breakdown'|'customer_profile_by_industry'|'customer_profile_by_revenue'|'customer_profile_by_geography'|'sales_compensation_billed_revenue'|'us_sales_and_use_tax_records' $dataSetType
 * @property \Aws\Api\DateTimeResult $dataSetPublicationDate
 * @property string $roleNameArn
 * @property string $destinationS3BucketName
 * @property string|null $destinationS3Prefix
 * @property string $snsTopicArn
 * @property array<string, string>|null $customerDefinedValues
 */
class GenerateDataSetRequest extends Request
{
    /**
     * @param array{
     *     dataSetType: 'customer_subscriber_hourly_monthly_subscriptions'|'customer_subscriber_annual_subscriptions'|'daily_business_usage_by_instance_type'|'daily_business_fees'|'daily_business_free_trial_conversions'|'daily_business_new_instances'|'daily_business_new_product_subscribers'|'daily_business_canceled_product_subscribers'|'monthly_revenue_billing_and_revenue_data'|'monthly_revenue_annual_subscriptions'|'monthly_revenue_field_demonstration_usage'|'monthly_revenue_flexible_payment_schedule'|'disbursed_amount_by_product'|'disbursed_amount_by_product_with_uncollected_funds'|'disbursed_amount_by_instance_hours'|'disbursed_amount_by_customer_geo'|'disbursed_amount_by_age_of_uncollected_funds'|'disbursed_amount_by_age_of_disbursed_funds'|'disbursed_amount_by_age_of_past_due_funds'|'disbursed_amount_by_uncollected_funds_breakdown'|'customer_profile_by_industry'|'customer_profile_by_revenue'|'customer_profile_by_geography'|'sales_compensation_billed_revenue'|'us_sales_and_use_tax_records',
     *     dataSetPublicationDate: \Aws\Api\DateTimeResult,
     *     roleNameArn: string,
     *     destinationS3BucketName: string,
     *     destinationS3Prefix?: string|null,
     *     snsTopicArn: string,
     *     customerDefinedValues?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
