<?php

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

    /**
     * rpc SayTest(TestRequest) returns (TestReply) {}
     * Try to use the same method name as (gprc defines the User service)
     * For request and response services
     * @param PBEmpty $argument
     * @param array $metadata
     * @param array $options
     * @return \Grpc\UnaryCall
     */
    public function ListUser(PBEmpty $argument, $metadata = [], $options = [])
    {
        // (/ xuexitest.User/SayTest) is the service and method that requests the server, basically the same as the proto file definition
        // (\ User\TestReply) is the response information (that kind), basically the same as the proto file definition
        return $this->_simpleRequest('/proto.UserService/ListUser',
            $argument,
            ['\user\UserList', 'decode'],
            $metadata, $options);
    }

}