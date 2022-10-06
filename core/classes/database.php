<?php

//create connection with dataBase MySQL

    class DataBase{
        private $host;
        private $db;
        private $user;
        private $password;
        private $charser;
        private $error;


        public function __construct(){
            $this -> host =     HOST;
            $this -> db =       DB;
            $this -> user =     USER;
            $this -> password = PASSWORD;
            $this -> charser =  CHARSET;
        }


        function connect(){
            try {
                $connection = "mysql:host=" . HOST . ";"
                    . "dbname=" . DB . ";"
                    . "user=" . USER . ";"
                    . "password=" . PASSWORD . ";"
                    . "charset=" . CHARSET;
    
                $options = [
                    PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES  => FALSE,
                ];
    
                $pdo = new PDO($connection, USER, PASSWORD, $options);
               
                return $pdo;

        } catch (PDOException $e) {
            require_once(VIEWS . "/error/error.php");
        }
    }
    }



?>