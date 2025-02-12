<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SecurityCenterManagement.GetSecurityHealthAnalyticsCustomModule][google.cloud.securitycentermanagement.v1.SecurityCenterManagement.GetSecurityHealthAnalyticsCustomModule].
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.GetSecurityHealthAnalyticsCustomModuleRequest</code>
 */
class GetSecurityHealthAnalyticsCustomModuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the resource, in the format
     * `projects/{project}/locations/{location}/securityHealthAnalyticsCustomModules/{custom_module}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the resource, in the format
     *                     `projects/{project}/locations/{location}/securityHealthAnalyticsCustomModules/{custom_module}`. Please see
     *                     {@see SecurityCenterManagementClient::securityHealthAnalyticsCustomModuleName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenterManagement\V1\GetSecurityHealthAnalyticsCustomModuleRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the resource, in the format
     *           `projects/{project}/locations/{location}/securityHealthAnalyticsCustomModules/{custom_module}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the resource, in the format
     * `projects/{project}/locations/{location}/securityHealthAnalyticsCustomModules/{custom_module}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the resource, in the format
     * `projects/{project}/locations/{location}/securityHealthAnalyticsCustomModules/{custom_module}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

