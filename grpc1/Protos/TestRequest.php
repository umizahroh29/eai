<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *TestRequest request structure
 *
 * Generated from protobuf message <code>protos.TestRequest</code>
 */
class TestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 typeid = 1;</code>
     */
    private $typeid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $typeid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 typeid = 1;</code>
     * @return int|string
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Generated from protobuf field <code>int64 typeid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTypeid($var)
    {
        GPBUtil::checkInt64($var);
        $this->typeid = $var;

        return $this;
    }

}

