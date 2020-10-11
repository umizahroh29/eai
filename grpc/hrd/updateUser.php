<?php
require '../client/hrd.php';
require '../user/User/User.php';
require '../user/GPBMetadata/Proto.php';

$params = $_POST;

//Instantiate TestRequest request class
$request = new \User\User();
$request->setId($params['id']);
$request->setName($params['name']);
$request->setEmail($params['email']);
$request->setPosition($params['position']);

//Call remote service
$get = $client->UpdateUser($request)->wait();

list($response, $status) = $get;
$result['id'] = $response->getId();
$result['name'] = $response->getName();
$result['email'] = $response->getEmail();
$result['position'] = $response->getPosition();

header("Location: list.php");