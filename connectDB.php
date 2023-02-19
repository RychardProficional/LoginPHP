<?php

const hostname = "localhost";
const username = "root";
const password = "";
const database = "users";
$db = new mysqli(hostname, username, password, database) or die("Não foi possivel conectar-se ao banco de dados: ".$db->connect_error);
