<?php
require '../client/hrd.php';
require '../user/User/User.php';
require '../user/GPBMetadata/Proto.php';

$params = $_POST;

//Instantiate TestRequest request class
$request = new \User\UserRequestId();
$request->setId($params['id']);

//Call remote service
$get = $client->DeleteUser($request)->wait();

echo json_encode(['status' => true]);