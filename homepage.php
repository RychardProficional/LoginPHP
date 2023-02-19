<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location ./login.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
    <a href="./logout">logout</a>
</body>
</html>