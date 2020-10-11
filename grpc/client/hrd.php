<?php
//Automatic loading with composer
require '../vendor/autoload.php';
require '../user/User/UserClient.php';

//Used to connect to the server
$client = new UserClient('127.0.0.1:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

return $client;