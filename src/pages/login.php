<?php
if(isset($_POST['user']) && isset($_POST['pass']))
{
    header("location: ../actions/verification.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - Login PHP</title>
</head>
<body>
    <main class="content-login-form">
        <form action="./login.php" method="post" class="login-form">
            <label for="user" class="content-imput">
                <span class="login-form-label">Usuário: </span>
                <input type="text" name="user" id="user" class="login-form-input">
            </label>

            <label for="pass" class="content-imput">
                <span class="login-form-label">Senha: </span>
                <input type="text" name="pass" id="pass" class="login-form-input">
            </label>

            <input type="submit" value="Entrar">
        </form>

        <a href="./register" class="link">Cadastra-se</a>
    </main>
</body>
</html>