<?php

namespace Sunaoka\Aws\Structures\Ses\CreateCustomVerificationEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string $FromEmailAddress
 * @property string $TemplateSubject
 * @property string $TemplateContent
 * @property string $SuccessRedirectionURL
 * @property string $FailureRedirectionURL
 */
class CreateCustomVerificationEmailTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     FromEmailAddress: string,
     *     TemplateSubject: string,
     *     TemplateContent: string,
     *     SuccessRedirectionURL: string,
     *     FailureRedirectionURL: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
