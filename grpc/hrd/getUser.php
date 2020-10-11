<?php
require '../client/hrd.php';
require '../user/User/User.php';
require '../user/GPBMetadata/Proto.php';

$params = $_POST;

//Instantiate TestRequest request class
$request = new \User\UserRequestId();
$request->setId($params['id']);

//Call remote service
$get = $client->GetUser($request)->wait();

list($response, $status) = $get;
$result['id'] = $response->getId();
$result['name'] = $response->getName();
$result['email'] = $response->getEmail();
$result['position'] = $response->getPosition();

echo json_encode($result);