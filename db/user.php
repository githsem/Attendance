<?php

    class user{
        //private database object
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }
    }
?>        
