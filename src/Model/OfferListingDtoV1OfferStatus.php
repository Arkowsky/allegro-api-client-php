<?php
/**
 * OfferListingDtoV1OfferStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.2-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;
use \AllegroApi\ObjectSerializer;

/**
 * OfferListingDtoV1OfferStatus Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferListingDtoV1OfferStatus
{
    /**
     * Possible values of this enum
     */
    const INACTIVE = 'INACTIVE';
    const ACTIVATING = 'ACTIVATING';
    const ACTIVE = 'ACTIVE';
    const ENDED = 'ENDED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INACTIVE,
            self::ACTIVATING,
            self::ACTIVE,
            self::ENDED,
        ];
    }
}


