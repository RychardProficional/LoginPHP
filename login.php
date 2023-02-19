<?php

session_start();
require_once("./verifica.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

if(verficaLogin($user, $pass))
{
    $_SESSION['username'] = $user;
    header("location ./homepage.php");
    exit();
}
$_SESSION['loginError'] = True;
header("location: ./index.php");