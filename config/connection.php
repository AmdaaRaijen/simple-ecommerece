<?php

function connection()
{
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "simple_ecommerce";

    // Create connection
    $connection = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        exit();
    }

    return $connection;
}
