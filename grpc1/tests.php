<?php

//Automatic loading with composer
require __DIR__ . '/vendor/autoload.php';

//Used to connect to the server
$client = new \Protos\TestClient('127.0.0.1:50052', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

//Instantiate TestRequest request class
$request = new \Protos\TestRequest();
$request->setTypeid(1);

//Call remote service
$get = $client->SayTest($request)->wait();

//Return array
//$reply is a TestReply object
//$status is an array
list($reply, $status) = $get;

//array
$getdata = $reply->getGetdataarr();

foreach ($getdata as $k=>$v){
    echo $v->getId(),'=>',$v->getName(),"\n\r";
}