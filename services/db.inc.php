<?php

class DB
{
    // private static $server = "localhost";
    // private static $username = "root";
    // private static $password = "";
    // private static $dbname = "apsara";

    private static $server = "localhost";
    private static $username = "isotect_admin";
    private static $password = "IsoTect@2019";
    private static $dbname = "isotect_interiors";

    public static function getConnection()
    {
        return new mysqli(self::$server, self::$username, self::$password, self::$dbname);
    }
}
