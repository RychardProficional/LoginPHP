<?php

abstract class DB_user
{
    protected $conn = null;
    protected function createUser($user, $pass)
    {
        $q = "";
        self::$conn->query($q);
    }

    protected function readUser($id)
    {
        $q = "";
        self::$conn->query($q);
    }
    
    protected function updateUser($id, $user, $pass)
    {
        $q = "";
        self::$conn->query($q);
    }

    protected function deleteUser($id)
    {
        $q = "";
        self::$conn->query($q);
    }

    protected function getIdUser($user, $pass)
    {
        $q = "";
        self::$conn->query($q);
    }

    protected function dataExist($data, $dataname)
    {
        $q = "";
        self::$conn->query($q);
    }

    abstract public static function start($connection);
}