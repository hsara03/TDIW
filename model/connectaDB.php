
<?php

function getConn()
{
    return pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-k2 user=tdiw-k2 password=CozitjdL");
}


/*
class Database
{
    private static $instance = null;

    private function __construct()
    {
        // Empty constructor to prevent multiple instances.
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=tdiw-k2', 'tdiw-k2', 'CozitjdL', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }
        return self::$instance;
    }
}


*/




