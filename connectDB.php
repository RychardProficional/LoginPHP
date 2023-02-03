<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "usersRegisters";

$db = new mysqli($hostname, $username, $password, $database) or die("Não foi possivel conectar-se ao banco de dados: ".$db->connect_error);
