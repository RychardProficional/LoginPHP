<?php

const DB_HOST = "localhost";
const DB_NAME = "users";
const DB_USER = "root";
const DB_PASS = "";

try
{
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}
catch(throwable $t)
{
    throw $t;
}