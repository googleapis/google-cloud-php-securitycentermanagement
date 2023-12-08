<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\SimulatedFinding;

use UnexpectedValueException;

/**
 * The severity of the finding.
 *
 * Protobuf type <code>google.cloud.securitycentermanagement.v1.SimulatedFinding.Severity</code>
 */
class Severity
{
    /**
     * This value is used for findings when a source doesn't write a severity
     * value.
     *
     * Generated from protobuf enum <code>SEVERITY_UNSPECIFIED = 0;</code>
     */
    const SEVERITY_UNSPECIFIED = 0;
    /**
     * Vulnerability:
     * A critical vulnerability is easily discoverable by an external actor,
     * exploitable, and results in the direct ability to execute arbitrary code,
     * exfiltrate data, and otherwise gain additional access and privileges to
     * cloud resources and workloads. Examples include publicly accessible
     * unprotected user data and public SSH access with weak or no
     * passwords.
     * Threat:
     * Indicates a threat that is able to access, modify, or delete data or
     * execute unauthorized code within existing resources.
     *
     * Generated from protobuf enum <code>CRITICAL = 1;</code>
     */
    const CRITICAL = 1;
    /**
     * Vulnerability:
     * A high risk vulnerability can be easily discovered and exploited in
     * combination with other vulnerabilities in order to gain direct access and
     * the ability to execute arbitrary code, exfiltrate data, and otherwise
     * gain additional access and privileges to cloud resources and workloads.
     * An example is a database with weak or no passwords that is only
     * accessible internally. This database could easily be compromised by an
     * actor that had access to the internal network.
     * Threat:
     * Indicates a threat that is able to create new computational resources in
     * an environment but not able to access data or execute code in existing
     * resources.
     *
     * Generated from protobuf enum <code>HIGH = 2;</code>
     */
    const HIGH = 2;
    /**
     * Vulnerability:
     * A medium risk vulnerability could be used by an actor to gain access to
     * resources or privileges that enable them to eventually (through multiple
     * steps or a complex exploit) gain access and the ability to execute
     * arbitrary code or exfiltrate data. An example is a service account with
     * access to more projects than it should have. If an actor gains access to
     * the service account, they could potentially use that access to manipulate
     * a project the service account was not intended to.
     * Threat:
     * Indicates a threat that is able to cause operational impact but may not
     * access data or execute unauthorized code.
     *
     * Generated from protobuf enum <code>MEDIUM = 3;</code>
     */
    const MEDIUM = 3;
    /**
     * Vulnerability:
     * A low risk vulnerability hampers a security organization's ability to
     * detect vulnerabilities or active threats in their deployment, or prevents
     * the root cause investigation of security issues. An example is monitoring
     * and logs being disabled for resource configurations and access.
     * Threat:
     * Indicates a threat that has obtained minimal access to an environment but
     * is not able to access data, execute code, or create resources.
     *
     * Generated from protobuf enum <code>LOW = 4;</code>
     */
    const LOW = 4;

    private static $valueToName = [
        self::SEVERITY_UNSPECIFIED => 'SEVERITY_UNSPECIFIED',
        self::CRITICAL => 'CRITICAL',
        self::HIGH => 'HIGH',
        self::MEDIUM => 'MEDIUM',
        self::LOW => 'LOW',
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


