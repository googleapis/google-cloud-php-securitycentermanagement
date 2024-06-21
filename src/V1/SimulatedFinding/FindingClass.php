<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\SimulatedFinding;

use UnexpectedValueException;

/**
 * Represents what kind of Finding it is.
 *
 * Protobuf type <code>google.cloud.securitycentermanagement.v1.SimulatedFinding.FindingClass</code>
 */
class FindingClass
{
    /**
     * Unspecified finding class.
     *
     * Generated from protobuf enum <code>FINDING_CLASS_UNSPECIFIED = 0;</code>
     */
    const FINDING_CLASS_UNSPECIFIED = 0;
    /**
     * Describes unwanted or malicious activity.
     *
     * Generated from protobuf enum <code>THREAT = 1;</code>
     */
    const THREAT = 1;
    /**
     * Describes a potential weakness in software that increases risk to
     * Confidentiality & Integrity & Availability.
     *
     * Generated from protobuf enum <code>VULNERABILITY = 2;</code>
     */
    const VULNERABILITY = 2;
    /**
     * Describes a potential weakness in cloud resource/asset configuration that
     * increases risk.
     *
     * Generated from protobuf enum <code>MISCONFIGURATION = 3;</code>
     */
    const MISCONFIGURATION = 3;
    /**
     * Describes a security observation that is for informational purposes.
     *
     * Generated from protobuf enum <code>OBSERVATION = 4;</code>
     */
    const OBSERVATION = 4;
    /**
     * Describes an error that prevents some SCC functionality.
     *
     * Generated from protobuf enum <code>SCC_ERROR = 5;</code>
     */
    const SCC_ERROR = 5;
    /**
     * Describes a potential security risk due to a change in the security
     * posture.
     *
     * Generated from protobuf enum <code>POSTURE_VIOLATION = 6;</code>
     */
    const POSTURE_VIOLATION = 6;
    /**
     * Describes a combination of security issues that represent a more severe
     * security problem when taken together.
     *
     * Generated from protobuf enum <code>TOXIC_COMBINATION = 7;</code>
     */
    const TOXIC_COMBINATION = 7;

    private static $valueToName = [
        self::FINDING_CLASS_UNSPECIFIED => 'FINDING_CLASS_UNSPECIFIED',
        self::THREAT => 'THREAT',
        self::VULNERABILITY => 'VULNERABILITY',
        self::MISCONFIGURATION => 'MISCONFIGURATION',
        self::OBSERVATION => 'OBSERVATION',
        self::SCC_ERROR => 'SCC_ERROR',
        self::POSTURE_VIOLATION => 'POSTURE_VIOLATION',
        self::TOXIC_COMBINATION => 'TOXIC_COMBINATION',
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


