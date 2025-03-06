<?php

namespace Config {
    class Database
    {
        static function getConnection()
        {
            $host = "localhost";
            $port = "3306";
            $database = 'belajar_php_todolist';
            $user = 'root';
            $password = '';

            return new \PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password);
        }
    }
}