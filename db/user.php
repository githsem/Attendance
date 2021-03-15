<?php

    class user{
        //private database object
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }

        public function insertUser($username, $password){
            try {
                $sql = "INSERT INTO users (username,password)  VALUES (:username,:password)";
               
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':usernam',$username);
                $stmt->bindparam(':password',$password);
                
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage($username, $password);
                return false;
            }
        

        }

        public function getUser(){

        }
    }
?>        
