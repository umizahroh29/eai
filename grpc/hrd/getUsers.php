<?php
require '../client/hrd.php';
require '../user/User/PBEmpty.php';
require '../user/GPBMetadata/Proto.php';

//Instantiate TestRequest request class
$request = new \User\PBEmpty();

//Call remote service
$get = $client->ListUser($request)->wait();

list($response, $status) = $get;
$data = $response->getUsers();
$result = [];
$i = 0;
foreach ($data as $item) {
    $result[$i]['id'] = $item->getId();
    $result[$i]['name'] = $item->getName();
    $result[$i]['email'] = $item->getEmail();
    $result[$i]['position'] = $item->getPosition();

    $i++;
}

return $result;