<?php

require_once("../../config.php");
require_once("./actionUser.php");
session_start();
ActionsUser::start($conn);

class Verification
{
    public static function login()
    {
        
    }
}