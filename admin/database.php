<?php

    class Database {

        private static $dbHost = "localhost";
        private static $dbName = "u508042746_Quai_Antique";
        private static $dbUsername = "u508042746_root";
        private static $dbUserpassword = "Root1891";
        private static $connection = null;
        
        public static function connect() {
            if(self::$connection == null) {
                try {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
                }
                catch(PDOException $e) {
                    die($e->getMessage());
                }
            }

            return self::$connection;
        }
        
        public static function disconnect() {
            self::$connection = null;
        }
    }
    Database::connect();
    
?>
