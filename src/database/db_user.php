<?php

require_once "./db.php";

abstract class DB_user extends DB
{
    protected $conn = null;
    protected function createUser($user, $pass)
    {
        $q = "";
        self::$conn->query($q);
        return true;
    }

    protected function readUser($id)
    {
        $q = "";
        return self::$conn->query($q);
    }
    
    protected function updateUser($id, $user, $pass)
    {
        $q = "";
        self::$conn->query($q);
        return true;
    }

    protected function deleteUser($id)
    {
        $q = "";
        self::$conn->query($q);
    }

    protected function getIdUser($user, $pass)
    {
        $q = "";
        return self::$conn->query($q);
    }

    abstract public static function start($connection);
}