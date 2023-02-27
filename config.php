<?php

$db_host = "localhost";
$db_name = "users";
$db_user = "root";
$db_pass = "";

try
{
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
}
catch(throwable $t)
{
    throw $t;
}