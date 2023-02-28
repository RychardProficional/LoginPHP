<?php
require_once "../database/user.php";

class ActionsUser extends DB_user
{
    public static function create($user, $pass)
    {
        if($user && $pass && !parent::dataExist($user, "user"))
        {
            return parent::createUser($user, $pass);
        }
        return false;
    }
    
    public static function read($id)
    {
        if(parent::dataExist($id, "id"))
        {
            return parent::readUser($id);
        }
        return null;
    }

    public static function update($id, $user, $pass)
    {
        if(parent::dataExist($id, "id") && $user && $pass)
        {
            return parent::updateUser($id, $user, $pass);
        }
        return false;
    }

    public static function delete($id)
    {
        if(parent::dataExist($id, "id"))
        {
            parent::deleteUser($id);
        }
    }

    public static function getId($user, $pass)
    {
        if(parent::dataExist($user, "username") && parent::dataExist($pass, "password"))
        {
            return parent::getIdUser($user, $pass);
        }
    }

    public static function start($connection)
    {
        self::$conn = $connection;
    }
}