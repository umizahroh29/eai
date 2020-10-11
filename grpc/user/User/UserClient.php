<?php

use User\PBEmpty;
use User\User;
use User\UserRequestId;

/**
 * service User{}
 * Write a client (gprc defines the Xuexitest service)
 */
class UserClient extends \Grpc\BaseStub
{
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    public function ListUser(PBEmpty $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/user.UserService/ListUser',
            $argument,
            ['User\UserList', 'decode'],
            $metadata, $options);
    }

    public function GetUser(UserRequestId $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/user.UserService/GetUser',
            $argument,
            ['\user\User', 'decode'],
            $metadata, $options);
    }

    public function InsertUser(User $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/user.UserService/InsertUser',
            $argument,
            ['\user\User', 'decode'],
            $metadata, $options);
    }

    public function UpdateUser(User $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/user.UserService/UpdateUser',
            $argument,
            ['\user\User', 'decode'],
            $metadata, $options);
    }

    public function DeleteUser(UserRequestId $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/user.UserService/DeleteUser',
            $argument,
            ['\User\PBEmpty', 'decode'],
            $metadata, $options);
    }
}