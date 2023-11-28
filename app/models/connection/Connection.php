<?php

namespace app\models\connection;


use PDO;
use PDOException;

class Connection
{
    private static $pdo = null;

    public static function connect()
    {
        try {
            if (!static::$pdo) {
                static::$pdo = new PDO("mysql:host=127.0.0.1;dbname=task", "root", "D!h*$4u9", [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            }

            return static::$pdo;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
