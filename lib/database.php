<?php
    require_once 'config/config.php';

    class Database {
        private $connection;

        public function __construct() {
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($this->connection->connect_error) {
                die("Database connection failed: " . $this->connection->connect_error);
            }
        }

        public function query($sql) {
            return $this->connection->query($sql);
        }

        // Other methods for executing queries, fetching results, etc.
    }
    
?>