<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>UserList</code>
 */
class UserList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .User users = 1;</code>
     */
    private $users;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \User[]|\Google\Protobuf\Internal\RepeatedField $users
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .User users = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated .User users = 1;</code>
     * @param \User[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \User::class);
        $this->users = $arr;

        return $this;
    }

}

