<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutGatewayResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property 'DEFAULT_4XX'|'DEFAULT_5XX'|'RESOURCE_NOT_FOUND'|'UNAUTHORIZED'|'INVALID_API_KEY'|'ACCESS_DENIED'|'AUTHORIZER_FAILURE'|'AUTHORIZER_CONFIGURATION_ERROR'|'INVALID_SIGNATURE'|'EXPIRED_TOKEN'|'MISSING_AUTHENTICATION_TOKEN'|'INTEGRATION_FAILURE'|'INTEGRATION_TIMEOUT'|'API_CONFIGURATION_ERROR'|'UNSUPPORTED_MEDIA_TYPE'|'BAD_REQUEST_PARAMETERS'|'BAD_REQUEST_BODY'|'REQUEST_TOO_LARGE'|'THROTTLED'|'QUOTA_EXCEEDED'|'WAF_FILTERED' $responseType
 * @property string|null $statusCode
 * @property array<string, string>|null $responseParameters
 * @property array<string, string>|null $responseTemplates
 */
class PutGatewayResponseRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     responseType: 'DEFAULT_4XX'|'DEFAULT_5XX'|'RESOURCE_NOT_FOUND'|'UNAUTHORIZED'|'INVALID_API_KEY'|'ACCESS_DENIED'|'AUTHORIZER_FAILURE'|'AUTHORIZER_CONFIGURATION_ERROR'|'INVALID_SIGNATURE'|'EXPIRED_TOKEN'|'MISSING_AUTHENTICATION_TOKEN'|'INTEGRATION_FAILURE'|'INTEGRATION_TIMEOUT'|'API_CONFIGURATION_ERROR'|'UNSUPPORTED_MEDIA_TYPE'|'BAD_REQUEST_PARAMETERS'|'BAD_REQUEST_BODY'|'REQUEST_TOO_LARGE'|'THROTTLED'|'QUOTA_EXCEEDED'|'WAF_FILTERED',
     *     statusCode?: string|null,
     *     responseParameters?: array<string, string>|null,
     *     responseTemplates?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
