<?php

session_start();
require_once("connectDB.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

if(isset($user) and isset($pass))
{
    $query = "SELECT name FROM `user` WHERE `name` = `{user}` AND `pass` = `{pass}`";

    $result = $db->query($query);

    if ($result->num_rows > 0)
    {
        $_SESSION['user'] = $user;
        header("./page.php");
    }
}
$_SESSION['loginError'] = True;
header("./index.php");