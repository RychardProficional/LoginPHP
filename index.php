<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if($_SESSION['loginError'])
        {
            $_SESSION['loginError'] = false;
    ?>
        <div>
            <p>ERRO</p>
            </br>
        </div>
    <?php
        }
    ?>
    <form action="./login.php" method="post">
        <div>
            <label for="user">Usuário</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="pass">Senha</label>
            <input type="text" name="pass" id="pass">
        </div>
        <div>
            <input type="submit" value="Entrar">
        </div>
    </form>
</body>
</html>