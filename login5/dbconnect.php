<?php

$db_host = "eu-mm-auto-dub-01-b.cleardb.net";
$db_name = "heroku_70596e6cfc15edd";
$db_user = "b71ccb4ea22b98";
$db_pass = "d815a370";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

