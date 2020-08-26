<?php
    //set up database connection
    class Database {
        private static $username = 'root';
        private static $password = 'root';
        private static $dbname = 'eComProject';
        private static $dsn = 'mysql:host=localhost;dbname=eComProject';
        private static $dbcon;
        
        private function __construct() {
        
        }//construct
        
        //get the pdo connection
        public static function getDb() {
            if(!isset(self::$dbcon)) {
                try {
                    self::$dbcon = new PDO(self::$dsn, self::$username, self::$password);
                } catch (PDOexception $e) {
                    $msg = $e->getMessage();
                    exit();
                }
            } //if isset
        return self::$dbcon;
            
        } //get DB function
    }//database