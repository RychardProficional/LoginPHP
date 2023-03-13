<?php

require_once("./actionUser.php");

ActionsUser::start($conn);

class Verification
{
    public static function login($user, $pass)
    {
        $id = ActionsUser::getId($user, $pass);

        if ($id != -1) return true;

        return false;
    }
}