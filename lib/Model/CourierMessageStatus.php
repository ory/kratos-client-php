<?php
/**
 * CourierMessageStatus
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
 * CourierMessageStatus Class Doc Comment
 *
 * @category Class
 * @description A Message&#39;s Status
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CourierMessageStatus
{
    /**
     * Possible values of this enum
     */
    public const QUEUED = 'queued';

    public const SENT = 'sent';

    public const PROCESSING = 'processing';

    public const ABANDONED = 'abandoned';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUEUED,
            self::SENT,
            self::PROCESSING,
            self::ABANDONED
        ];
    }
}


