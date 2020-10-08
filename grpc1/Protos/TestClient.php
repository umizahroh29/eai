<?php

namespace Protos;

/**
 * service Test{}
 * Write a client (gprc defines the Test service)
 */
class TestClient extends \Grpc\BaseStub
{

    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * rpc SayTest(TestRequest) returns (TestReply) {}
     * Try to use the same method name as (gprc defines the Test service)
     * For request and response services
     * @param \Protos\TestRequest $argument
     * @param array $metadata
     * @param array $options
     * @return \Grpc\UnaryCall
     */
    public function SayTest(\Protos\TestRequest $argument, $metadata = [], $options = [])
    {
        // (/ xuexitest.Test/SayTest) is the service and method that requests the server, basically the same as the proto file definition
        // (\ Test\TestReply) is the response information (that kind), basically the same as the proto file definition
        return $this->_simpleRequest('/proto.Test/SayTest',
            $argument,
            ['\Protos\TestReply', 'decode'],
            $metadata, $options);
    }

}