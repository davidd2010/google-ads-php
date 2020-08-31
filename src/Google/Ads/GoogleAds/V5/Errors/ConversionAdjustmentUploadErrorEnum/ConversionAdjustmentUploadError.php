<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/conversion_adjustment_upload_error.proto

namespace Google\Ads\GoogleAds\V5\Errors\ConversionAdjustmentUploadErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible conversion adjustment upload errors.
 *
 * Protobuf type <code>google.ads.googleads.v5.errors.ConversionAdjustmentUploadErrorEnum.ConversionAdjustmentUploadError</code>
 */
class ConversionAdjustmentUploadError
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The specified conversion action was created too recently.
     * Please try the upload again after 4-6 hours have passed since the
     * conversion action was created.
     *
     * Generated from protobuf enum <code>TOO_RECENT_CONVERSION_ACTION = 2;</code>
     */
    const TOO_RECENT_CONVERSION_ACTION = 2;
    /**
     * No conversion action of a supported ConversionActionType that matches the
     * provided information can be found for the customer.
     *
     * Generated from protobuf enum <code>INVALID_CONVERSION_ACTION = 3;</code>
     */
    const INVALID_CONVERSION_ACTION = 3;
    /**
     * A retraction was already reported for this conversion.
     *
     * Generated from protobuf enum <code>CONVERSION_ALREADY_RETRACTED = 4;</code>
     */
    const CONVERSION_ALREADY_RETRACTED = 4;
    /**
     * A conversion for the supplied combination of conversion
     * action and conversion identifier could not be found.
     *
     * Generated from protobuf enum <code>CONVERSION_NOT_FOUND = 5;</code>
     */
    const CONVERSION_NOT_FOUND = 5;
    /**
     * The specified conversion has already expired. Conversions expire after 55
     * days, after which adjustments cannot be reported against them.
     *
     * Generated from protobuf enum <code>CONVERSION_EXPIRED = 6;</code>
     */
    const CONVERSION_EXPIRED = 6;
    /**
     * The supplied adjustment date time precedes that of the original
     * conversion.
     *
     * Generated from protobuf enum <code>ADJUSTMENT_PRECEDES_CONVERSION = 7;</code>
     */
    const ADJUSTMENT_PRECEDES_CONVERSION = 7;
    /**
     * A restatement with a more recent adjustment date time was already
     * reported for this conversion.
     *
     * Generated from protobuf enum <code>MORE_RECENT_RESTATEMENT_FOUND = 8;</code>
     */
    const MORE_RECENT_RESTATEMENT_FOUND = 8;
    /**
     * The conversion was created too recently.
     *
     * Generated from protobuf enum <code>TOO_RECENT_CONVERSION = 9;</code>
     */
    const TOO_RECENT_CONVERSION = 9;
    /**
     * Restatements cannot be reported for a conversion action that always uses
     * the default value.
     *
     * Generated from protobuf enum <code>CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE = 10;</code>
     */
    const CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE = 10;
    /**
     * The request contained more than 2000 adjustments.
     *
     * Generated from protobuf enum <code>TOO_MANY_ADJUSTMENTS_IN_REQUEST = 11;</code>
     */
    const TOO_MANY_ADJUSTMENTS_IN_REQUEST = 11;
    /**
     * The conversion has been adjusted too many times.
     *
     * Generated from protobuf enum <code>TOO_MANY_ADJUSTMENTS = 12;</code>
     */
    const TOO_MANY_ADJUSTMENTS = 12;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TOO_RECENT_CONVERSION_ACTION => 'TOO_RECENT_CONVERSION_ACTION',
        self::INVALID_CONVERSION_ACTION => 'INVALID_CONVERSION_ACTION',
        self::CONVERSION_ALREADY_RETRACTED => 'CONVERSION_ALREADY_RETRACTED',
        self::CONVERSION_NOT_FOUND => 'CONVERSION_NOT_FOUND',
        self::CONVERSION_EXPIRED => 'CONVERSION_EXPIRED',
        self::ADJUSTMENT_PRECEDES_CONVERSION => 'ADJUSTMENT_PRECEDES_CONVERSION',
        self::MORE_RECENT_RESTATEMENT_FOUND => 'MORE_RECENT_RESTATEMENT_FOUND',
        self::TOO_RECENT_CONVERSION => 'TOO_RECENT_CONVERSION',
        self::CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE => 'CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE',
        self::TOO_MANY_ADJUSTMENTS_IN_REQUEST => 'TOO_MANY_ADJUSTMENTS_IN_REQUEST',
        self::TOO_MANY_ADJUSTMENTS => 'TOO_MANY_ADJUSTMENTS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionAdjustmentUploadError::class, \Google\Ads\GoogleAds\V5\Errors\ConversionAdjustmentUploadErrorEnum_ConversionAdjustmentUploadError::class);
