<?php

function connect()
{
    $connect = mysqli_connect('localhost', 'root', '', 'dashboard');

    if ($connect) {
        return $connect;
    } else {
        die('Connection Failed');
    }
}