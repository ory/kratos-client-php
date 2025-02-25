<?php
/**
 * AuthenticatorAssuranceLevel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory Identities API
 *
 * This is the API specification for Ory Identities with features such as registration, login, recovery, account verification, profile settings, password reset, identity management, session management, email and sms delivery, and more.
 *
 * The version of the OpenAPI document: v1.3.6-alpha.1
 * Contact: office@ory.sh
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Kratos\Client\Model;
use \Ory\Kratos\Client\ObjectSerializer;

/**
 * AuthenticatorAssuranceLevel Class Doc Comment
 *
 * @category Class
 * @description The authenticator assurance level can be one of \&quot;aal1\&quot;, \&quot;aal2\&quot;, or \&quot;aal3\&quot;. A higher number means that it is harder for an attacker to compromise the account.  Generally, \&quot;aal1\&quot; implies that one authentication factor was used while AAL2 implies that two factors (e.g. password + TOTP) have been used.  To learn more about these levels please head over to: https://www.ory.sh/kratos/docs/concepts/credentials
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthenticatorAssuranceLevel
{
    /**
     * Possible values of this enum
     */
    public const AAL0 = 'aal0';

    public const AAL1 = 'aal1';

    public const AAL2 = 'aal2';

    public const AAL3 = 'aal3';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AAL0,
            self::AAL1,
            self::AAL2,
            self::AAL3
        ];
    }
}


