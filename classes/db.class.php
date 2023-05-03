<?php

    class DB
    {
        protected $conn;
        private $hostname = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'db_scandiweb';

        protected function connect()
        {
            try {
                $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
                return $this->conn;
            } catch (\Throwable $th) {
                die("Error!:" . $this->conn->connect_error. "<br/>");
            }
        }
    }
