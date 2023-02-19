<?php

function verficaLogin($username, $password)
{
    if(isset($user) and isset($pass))
    {
        require_once("./connectDB.php");
        $query = "SELECT name FROM `user` WHERE `username` = `{user}` AND `password` = `{pass}`";

        $result = $db->query($query);
        $db->close();
        
        if ($result->num_rows > 0)
            return true;
    }
    return false;
}