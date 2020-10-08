<?php
//Automatic loading with composer
require './vendor/autoload.php';
require './user/UserClient.php';
require './user/PBEmpty.php';
require './user/GPBMetadata\Proto.php';

//Used to connect to the server
$client = new UserClient('127.0.0.1:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

//Instantiate TestRequest request class
$request = new PBEmpty();

//Call remote service
$get = $client->ListUser($request)->wait();

list($reply, $status) = $get;

//array
$getdata = $reply->getUsers();
echo $getdata;