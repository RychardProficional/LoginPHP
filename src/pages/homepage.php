<?php
session_start();
require_once "../../config.php";
require_once "../actions/verification.php";

if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || !Verification::login($_SESSION['username'], $_SESSION['password']))
{
    $_SESSION['error'] = 2;
    header("location: ./login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage - Login PHP</title>
</head>
<body>
    <h1>Parabens!!!, por algum motivo vc coceguiu fazer login com sucesso</h1>
</body>
</html>