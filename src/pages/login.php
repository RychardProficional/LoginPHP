<?php
session_start();

if(isset($_POST['user']) && isset($_POST['pass']))
{
    require_once "../../config.php";
    require_once "../actions/verification.php";

    if(!Verification::login($_POST['user'], $_POST['pass']))
    {
        $_SESSION['error'] = 0;
        $_SESSION['username'] = $_POST['user'];
        $_SESSION['password'] = $_POST['pass'];

        header("location: ./homepage.php");
        exit();
    }
    
    $_SESSION['error'] = 1;
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

        <?php   if(isset($_SESSION['error'])): 
                    if ($_SESSION['error']):?>
                        <span class="content-error">Ocorreu um erro ao tentar fazer login</span>
        <?php 
                    endif;
                else:
                    header("location: ./homepage.php");
                    exit();
                endif;
        ?>

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